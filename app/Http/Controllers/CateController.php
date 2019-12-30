<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Cate;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Requests;
use App\Http\Requests\CateRequest;

class CateController extends Controller
{
	public function getList() {
        $cates = Cate::select('id','name','parent_id')->orderBy('id', 'DESC')->get()->toArray();
		return view('admin.cate.list', compact('cates'));
	}

    public function getAdd() {
        $cates = Cate::select('id','name','parent_id')->get()->toArray();
    	return view('admin.cate.add', compact('cates'));
    }

    public function postAdd(CateRequest $request) {
    	$cate = new Cate;
    	$cate->name = $request->name;
    	$cate->alias = Str::slug($request->name, '-');
    	$cate->order = $request->order;
    	$cate->parent_id = $request->parent_id;
    	$cate->keywords = $request->keywords;
    	$cate->description = $request->description;
    	$cate->save();
    	return redirect()->route('admin.cate.getAdd')->with(['flash_level' => 'success', 'flash_message' => 'Thêm dữ liệu thành công']);
    }

    public function getDelete($id) {
        $child = Cate::where('parent_id', $id)->count();
        if($child == 0) {
            $cate = Cate::find($id);
            $cate->delete();
            return redirect()->route('admin.cate.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa dữ liệu thành công']);
        } else {
            echo "<script type='text/javascript' charset='utf-8'>
                alert('Bạn không thể xóa Danh mục này!');
                window.location = '";echo route('admin.cate.list');
                echo "'
            </script>";
        }

    }

    public function getEdit($id) {
        $cates = Cate::select('id','name','parent_id')->get()->toArray();
        $cate = Cate::findOrFail($id)->toArray();
        $data = [
            'cates'=> $cates,
            'cate' => $cate
        ];
        return view('admin.cate.edit', $data);
    }

    public function postEdit(Request $request, $id) {
        $this->validate($request,
            [
                'name' => 'required|unique:cates,name',
            ],
            [
                'name.required' => 'Tên danh mục không được để trống'
            ]
        );

        $cate = Cate::find($id);
        $cate->name = $request->name;
        $cate->alias = Str::slug($request->name, '-');
        $cate->order = $request->order;
        $cate->parent_id = $request->parent_id;
        $cate->keywords = $request->keywords;
        $cate->description = $request->description;
        $cate->save();
        return redirect()->route('admin.cate.getEdit', ['id' => $id])->with(['flash_level' => 'success', 'flash_message' => 'Sửa dữ liệu thành công']);
    }
}
