<?php

namespace App\Http\Requests\Color;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Color;

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
    public function rules(Request $request): array
    {
        $getColor = Color::whereSlug($request->slug)->first();
        if(!empty($getColor) && $getColor->color_name == $request->color_name){
            return [
                    'color_name' => "required|max:15",
                    'color_code' => "required|max:10",
            ];
        }else{
            return [
                    'color_name' => "required|max:15|unique:colors,color_name",
                    'color_code' => "required|max:10|unique:colors,color_code",
                   ];
        }
    }
    
    
    public function messages()
    {
        return[
              'color_name.required'          => "This field is required",
              'color_name.max'               => "Color name can not be greater then 15 char",
              'color_code.required'          => "This field is required",
              'color_code.max'               => "Color code can not be greater then 10 char",
        ];
    }
}
