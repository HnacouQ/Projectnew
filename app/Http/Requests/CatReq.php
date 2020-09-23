<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatReq extends FormRequest
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
     * 
     */
    //lệnh tạo request validate: php artisan make:request ...
    public function rules()
    {
        return [
            //
            'name' => 'required|unique:categories',
            'slug' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập dữ liệu cho trường này!!!',
            'name.unique' => 'Dữ liệu này đã tồn tại trong CSDL!!!',
            'slug.required' => 'Vui lòng nhập dữ liệu cho trường này!!!',
        ];
    }
}
