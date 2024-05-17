<?php

namespace App\Http\Requests\Areaofuse;

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
                'area_of_use' => "required|max:15|unique:area_of_uses,area_of_use",
        ];
    }
    
    
    public function messages()
    {
        return[
                'area_of_use.required'          => "This field is required",
                'area_of_use.max'               => "Area of use Can't be greater then 15 char",
              ];
    }
}
