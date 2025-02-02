<?php

namespace App\Http\Requests\Material;

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
                'name' => "required|max:15|unique:materials,name",
        ];
    }
    
    
    public function messages()
    {
        return[
                'name.required'          => "This field is required",
                'name.max'               => "Name can not be greater then 15 char",
              ];
    }
}
