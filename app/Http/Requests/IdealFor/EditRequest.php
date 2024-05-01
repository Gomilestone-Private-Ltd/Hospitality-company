<?php

namespace App\Http\Requests\IdealFor;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
                'ideal_for' => "required|max:15",
        ];
    }
    
    
    public function messages()
    {
        return[
                'ideal_for.required'          => "This field is required",
                'ideal_for.max'               => "Ideal for can not be greater then 15 char",
              ];
    }
}
