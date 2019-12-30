<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'password' => 'required',
            'passwordConfirm' => 'required|same:password',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Hãy nhập mật khẩu',
            'passwordConfirm.required' => 'Hãy nhập xác nhận mật khẩu',
            'passwordConfirm.same' => 'Xác nhận mật khẩu không chính xác',
            'email.required' => 'Hãy nhập email',
            'email.email' => 'Email không đúng cú pháp',
        ];
    }
}
