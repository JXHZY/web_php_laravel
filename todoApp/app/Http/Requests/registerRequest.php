<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class registerRequest extends Request
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
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required|email',
            'password'=>'required|max:10|min:3',
            //'password'=>'required|max:10|min:3|Regex:/[0-9]+/|Regex:/[a-zA-Z]+/|Regex:/^[a-zA-Z,$0-9_]+$/',
        ];
    }
}
