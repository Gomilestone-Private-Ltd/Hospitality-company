<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ContactUsCreateRequest extends FormRequest
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
        
        return [
                'company'         => "required|max:100",
                'company_type'    => "required",
                'full_name'       => "required|max:60",
                'c_email'         => "required|email",
                'phone_number'    => "required",
                'job_title'       => "required|max:100",
                //'role_describes ' => "required|max:30",
                'city'            => ($request->city) ? "max:50" :"",
                'state'           => ($request->state) ? "max:50" :"",
                'postal'          => ($request->postal) ? "digits:6|integer" :"",
                'country'         => "required",
                'how_can_we_help' => "required|max:1000",
                'c_message'       => "max:1000",
                
        ];
    }

    /**
     * @method
     * @param
     * @return
     */
    public function messages()
    {
        return [
                   'company.required'          => "Company Name is required",
                   'company.max'               => "Company Name can't be greater than 100 characters",
                   'full_name.required'        => "Full Name is required",
                   'full_name.max'             => "Full Name can't be greater than 60 characters",
                   'company_type.required'     => "Company type is required",
                   'c_email.required'          => "E-mail id is required",
                   'c_email.email'             => "Enter valid e-mail id ",     
                   'phone_number.required'     => "Phone number is required",
                   'job_title.required'        => "Job title is required",
                   'job_title.max'             => "Job title can't be greater than 100 characters",
                   'c_message.max'             => "Message can't be greater than 1000 characters",
                   'city.max'                  => "City Name can't be greater than 50 characters",
                   'state.max'                 => "State Name can't be greater than 50 characters",
                   'country.max'               => "Country Name is required",
                   'how_can_we_help.required'  => "This field is required",
                   'how_can_we_help.max'       => "This field can't be greater than 1000 characters",
                   'postal.digits'             => "Postal must be of 6 digits",
                   'postal.integer'            => "Postal must be in number format",
               ];
    }
}
