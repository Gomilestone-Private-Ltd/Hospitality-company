<?php

namespace App\Http\Requests\Varient;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
                'varient_type_name' =>'required| max:20',
                'varient_type'      =>'required',
        ];
    }

    public function messages()
    {
        return[
                'varient_type_name.required'          => "This field is required",
                'varient_type_name.max'               => "This Field can't be greater then 20 char",
                'varient_type.required'               => "This field is required",
             ];
    }
}

