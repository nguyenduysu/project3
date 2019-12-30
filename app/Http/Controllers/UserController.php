<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserEditRequest;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = array(
            'username' => $request->username,
            'password' => $request->password
        );

        if (Auth::attempt($credentials)) {
            if(Auth::user()->level == 3) {
                return redirect()->route('home');
            } else {
                return redirect()->route('admin.cate.list');
            }
        } else {
            return redirect()->route('getLogin')->with(['flash_level' => 'fail', 'flash_message' => 'Tài khoản hoặc mật khẩu không chính xác']);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }

    public function getList()
    {
        $user = User::select('id', 'username', 'email', 'level')->orderBy('id', 'DESC')->get()->toArray();
        $data = array(
            'users' => $user
        );
        return view('admin.user.list', $data);
    }

    public function getAdd()
    {
        return view('admin.user.add');
    }

    public function postAdd(UserRequest $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->level = $request->level;

        $user->save();
        return redirect()->route('admin.user.getAdd')->with(['flash_level' => 'success', 'flash_message' => 'Thêm dữ liệu thành công']);
    }

    public function getRegisterAccountCustomer()
    {
        return view('user.register-account');
    }

    public function postRegister(UserRequest $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->level = $request->level;

        $user->save();
        return redirect()->route('home')->with(['flash_level' => 'success', 'flash_message' => 'Thêm dữ liệu thành công']);
    }



    public function getDelete($id)
    {
        $current_user = Auth::user();
        $userDelete = User::find($id);
        if ($current_user->level < $userDelete->level) {
            $userDelete->delete();
            return redirect()->route('admin.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa người dùng thành công!']);
        } else {
            return redirect()->route('admin.user.list')->with(['flash_level' => 'fail', 'flash_message' => 'Bạn không có quyền xóa người dùng!']);
        }
    }

    public function getEdit($id)
    {
        $current_user = Auth::user();
        $userEdit = User::find($id);
        $data = array(
            'user' => $userEdit
        );
        if ($current_user->id == $id || $current_user->level == 1) {
            return view('admin.user.edit', $data);
        } else {
            return redirect()->route('admin.user.list')->with(['flash_level' => 'fail', 'flash_message' => 'Bạn không có quyền sửa người dùng này!']);
        }
    }

    public function postEdit($id, UserEditRequest $request)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->level = $request->level;
        $user->save();
        return redirect()->route('admin.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Sửa thông tin thành công!']);
    }

    public function editInfoCustomer($id)
    {
        $customerEdit = User::find($id);
        $data = array(
            'user' => $customerEdit
        );
        return view('user.edit-infor-customer', $data);
    }

    public function postEditInfoCustomer($id, UserEditRequest $request)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->level = $request->level;
        $user->save();
        return redirect()->route('getEditInfoCustomer', $id)->with(['flash_level' => 'success', 'flash_message' => 'Sửa thông tin thành công!']);
    }
}
