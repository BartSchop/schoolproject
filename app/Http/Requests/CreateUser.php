<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUser extends Request
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
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'username' => 'required|unique:users',
            'date' => 'required|date',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed|alphaNum',
            'password_confirmation' => 'required|min:5|alphaNum'
        ];
    }
}
