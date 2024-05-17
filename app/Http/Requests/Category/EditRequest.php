<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Category;

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
        $getCategory = Category::whereSlug($request->slug)->first();
        if(!empty($getCategory) && $getCategory->name == $request->name){
            return [
                    'name' => "required|max:50",
                    'image' => "mimes:png,jpeg,jpg|max:1024",
                    'category_type' => "required",
                   ];
        }else{
            return [
                    'name' => "required|max:50|unique:categories,name",
                    'image' => "mimes:png,jpeg,jpg|max:1024",
                    'category_type' => "required",
            ];
        }
    }

    public function messages()
    {
        return[
              'name.required'          => "This field is required",
              'name.max'               => "Name can not be greater then 50 char",
              'image.mimes'            => "Image must be of (png, jpeg, jpg) only",
              'image.max'              => "Image must be smaller then 1 mb size",
              'category_type.required' => "This field is required",
        ];
    }
}
