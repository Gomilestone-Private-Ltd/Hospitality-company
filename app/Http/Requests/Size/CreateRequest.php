<?php

namespace App\Http\Requests\Size;

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
                'size' => "required|max:15|unique:size,size",
                'size_type' => "required|max:10|unique:size,size_type",
        ];
    }
    
    
    public function messages()
    {
        return[
              'size.required'               => "This field is required",
              'size.max'                    => "Size can not be greater then 15 char",
              'size_type.required'          => "This field is required",
              'size_type.max'               => "Size type can not be greater then 10 char",
        ];
    }
}
