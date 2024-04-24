<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class GeneralEditRequest extends FormRequest
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
    public function rules(): array
    {
        return [
                'app_name'    =>'required|max:50',
                'email'       =>'required|max:30',
                'contact'     =>'required|digits:10',
                'address'     =>'required|max:150',
                'logo'        =>'mimes:png,jpg,jpeg|max:1024',
                'favicon'     =>'mimes:png,jpg,jpeg|max:1024',
        ];
    }

    public function messages()
    {
        return[
              'app_name.required'     => "Application name is required",
              'app_name.max'          => "Field can't be greater then 50 char",
              'email.required'        => "E-mail is required",
              'email.max'             => "Field can't be greater then 30 char",
              'contact.required'      => "Contact is required",
              'contact.digits'        => "Contact must be of 10 digits ",
              'logo.required'         => "Logo is required",
              'logo.mimes'            => "Logo must be of (png, jpeg, jpg) format only",
              'logo.max'              => "Logo must be smaller then 1 mb size",
              'favicon.required'      => "Favicon is required",
              'favicon.mimes'         => "Favicon must be of (png, jpeg, jpg) format only",
              'favicon.max'           => "Favicon must be smaller then 1 mb size",
        ];
    }

}
