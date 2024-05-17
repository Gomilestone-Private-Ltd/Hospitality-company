<?php

namespace App\Http\Requests\Material;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Material;

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
        $getMaterial = Material::whereSlug($request->slug)->first();
        if(!empty($getMaterial) && $getMaterial->name == $request->name){
            return [
                    'name' => "required|max:15",
                   ];
        }else{
            return [
                    'name' => "required|max:15|unique:materials,name",
                   ];
        }
    }
    
    
    public function messages()
    {
        return[
                'name.required'          => "This field is required",
                'name.max'               => "Name can not be greater then 15 char",
              ];
    }
}
