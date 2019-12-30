<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'passwordConfirm' => 'required|same:password',
            'email' => 'required|email',
            'level' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Hãy nhập tên người dùng',
            'username.unique' => 'Tên người dùng đã tồn tại',
            'password.required' => 'Hãy nhập mật khẩu',
            'passwordConfirm.required' => 'Hãy nhập xác nhận mật khẩu',
            'passwordConfirm.same' => 'Xác nhận mật khẩu không chính xác',
            'email.required' => 'Hãy nhập email',
            'email.email' => 'Email không đúng cú pháp',
            'level' => 'Hãy chọn loại người dùng'

        ];
    }
}
