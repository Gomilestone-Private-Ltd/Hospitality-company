<?php

namespace App\Http\Requests\Setting;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProfileEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        if($request->password){
            return [
                        'name'        =>'required|max:50',
                        'contact'     =>'required|digits:10',
                        //'address'   =>'required|max:150',
                        'avtar'       =>'mimes:png,jpg,jpeg|max:1024',
                        'password'    =>'min:4',
                    ];
        }else{
            return [
                        'name'        =>'required|max:50',
                        'contact'     =>'required|digits:10',
                        'address'     =>'required|max:150',
                        'avtar'       =>'mimes:png,jpg,jpeg|max:1024',
                  ];
        }
        
    }

    public function messages()
    {
        return[
              'name.required'         => "Name Field is required",
              'name.max'              => "Name can't be greater then 50 char",
              'contact.required'      => "Contact Field is required",
              'contact.digits'        => "Contact must be of 10 digits ",
              'avtar.required'        => "Avtar Field is required",
              'avtar.mimes'           => "Avtar must be of (png, jpeg, jpg) format only",
              'avtar.max'             => "Avtar must be smaller then 1 mb size",
              'password.min'          => "Password must be at least 4 characters.",
        ];
    }
}
