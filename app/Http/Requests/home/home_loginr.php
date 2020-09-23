<?php

namespace App\Http\Requests\home;

use Illuminate\Foundation\Http\FormRequest;

class home_loginr extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Email không được để trống!',
            'email.unique' => 'Tài khoản email này đã tồn tại!',
            'email.email' => 'Email của bạn chưa đúng định dạng',
            'password.required' => 'password không được để trống!'
        ];
    }
}
