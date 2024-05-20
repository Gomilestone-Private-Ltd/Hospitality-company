<?php

namespace App\Http\Requests\web;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateProfile extends FormRequest
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
        if(!empty($request->email)){
            return [
                        'fullname' => 'required|max:30',
                        'mobile'   =>'required|numeric|digits:10',
                        'email'    => 'email',
                   ];
        }else{
            return [
                        'fullname' => 'required|max:30',
                        'mobile'   =>'required|numeric|digits:10',
                   ];
        }
        
    }

    public function messages()
    {
        return[
                'fullname.required'  => "Full Name field is required",
                'fullname.max'       => "Full Name can't be greater then 30 char",
                'mobile.required'    => "Mobile number is required",
                'mobile.numeric'     => "Mobile number must be numeric",
                'mobile.digits'      => "Mobile number must be of 10 digits",
                'email.email'        => "Enter valid email",
              ];
    }
}
