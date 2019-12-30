<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'cate_id' => 'required',
            'name' => 'required|unique:products,name',
            'image' => 'required'
        ];
    }

    public function messages() {
        return [
            'cate_id.required' => 'Hãy chọn tên danh mục',
            'name.required' => 'Hãy điền tên sản phẩm',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'image.required' => 'Hãy chọn ảnh sản phẩm',
           // 'image.image' => 'File đã chọn không phải là ảnh'
        ];
    }
}
