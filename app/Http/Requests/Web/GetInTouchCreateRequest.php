<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class GetInTouchCreateRequest extends FormRequest
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
                'name'=>"required|max:30",
                'email'=>"required|email|max:30",   
                'message'=>"required|max:500",
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
                'name.required'     =>"Name is required",
                'name.max'          =>"Name can't be greater than 30 characters",
                'email.required'    =>"E-mail id is required",
                'email.email'       =>"Enter valid E-mail id ",     
                'email.max'         =>"E-mail can't be greater than 30 characters",
                'message.required'  =>"Message is required",
                'message.max'       =>"Message can't be greater than 500 characters",
        ];
    }


}
