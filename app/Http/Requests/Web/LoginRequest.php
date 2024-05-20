<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
                'fullname' =>'required|max:30',
                'mobile'   =>'required|numeric|digits:10',
               ];
    }

    public function messages()
    {
        return[
                'fullname.required'  => "Full Name field is required",
                'fullname.max'       => "Full Name can't be greater then 30 char",
                'mobile.required'    => "Mobile number is required",
                'mobile.numeric'     => "Mobile number must be numeric",
                'mobile.digits'      => "Mobile number can't be greater then 10 digits",
              ];
    }
}
