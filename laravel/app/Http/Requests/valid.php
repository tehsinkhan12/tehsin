<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Requests\FormRequest;

class formvalidation extends FormRequest
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
    public function rules(){
    return [
        'email'=>'required|email|exists:users',
        'password'=>'required'
    ];
}

public function messages(){
    return [
        'email.required' => 'Please enter email ',
        'email.exists' => 'Email not registered',
        'email.email' => 'Please enter valid email ',
        'password.required' => 'Enter your password.',
    ];
}
    
}
