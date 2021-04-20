<?php

namespace App\Http\Requests;

class RegisterRequest extends ApiRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:225',
            'email' => 'required|string|email|max:225|unique:users',
            'password' => 'required|string|min:8',
        ];
    }
}
