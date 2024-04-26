<?php

namespace App\Http\Requests\VarientValue;

use Illuminate\Foundation\Http\FormRequest;

class CreateValueRequest extends FormRequest
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
                'getVarientTypeId'     =>'required',
                'label_name'          =>'required|max:20',
                'label_value'         =>'required|max:20',
        ];
    }
    

    public function messages()
    {
        return[
                'getVarientTypeId.required'      => "This field is required",
                'label_name.max'                => "Can't be greater then 20 char",
                'label_name.required'           => "This field is required",
                'label_value.max'               => "Can't be greater then 20 char",
                'label_value.required'          => "This field is required",
             ];
    }
}
