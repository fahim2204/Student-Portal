<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class modRegistrationRequest extends FormRequest
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
            'fullName'  => 'required|min:3',
            'username'  => 'required|min:5',
            'password'  => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'cpassword' => 'required|same:password',
            'email'     => 'required',
            'contact'   => 'required|regex:/(01)[0-9]{9}/',
            'address'   => 'required',
            // 'image'     => 'required|image|mimes:jpeg,jpg,png'
            'image'     => 'required'
        ];
    }
    public function messages()
    {
        return [
            'cpassword.required' => 'Confirm Password Required',
            'cpassword.same' => 'Confirm Password Dose Not Match'
        ];
    }
}
