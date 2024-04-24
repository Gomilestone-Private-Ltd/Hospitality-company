<?php

namespace App\Http\Requests\Subcategory;

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
                'name'      => "required|max:50",
                'category'  => "required",
                'image'     => "required|mimes:png,jpeg,jpg|max:1024",
        ];
    }

    public function messages()
    {
        return[
              'name.required'      => "This field is required",
              'name.max'           => "Name can not be greater then 50 char",
              'category.required'  => "This field is required",
              'image.required'     => "This field is required",
              'image.mimes'        => "Image must be of (png, jpeg, jpg) only",
              'image.max'          => "Image must be smaller then 1 mb size",
        ];
    }
}
