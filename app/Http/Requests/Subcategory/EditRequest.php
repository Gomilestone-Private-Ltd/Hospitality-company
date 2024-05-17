<?php

namespace App\Http\Requests\Subcategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Subcategory;

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
        $getsubCategory = Subcategory::whereSlug($request->slug)->first();
        if(!empty($getsubCategory) && $getsubCategory->name == $request->name){
            return [
                    'name'         => "required|max:50",
                    'category'     => "required",
                    'image'        => "mimes:png,jpeg,jpg|max:1024",
                    'description'  => "required|max:250",
                   ];
        }else{
            return [
                    'name'         => "required|max:50|unique:subcategories,name",
                    'category'     => "required",
                    'image'        => "mimes:png,jpeg,jpg|max:1024",
                    'description'  => "required|max:250",
                   ];
        }
    }

    public function messages()
    {
        return[
              'name.required'        => "This field is required",
              'name.max'             => "Name can not be greater then 50 char",
              'category.required'    => "This field is required",
              'image.mimes'          => "Image must be of (png, jpeg, jpg) only",
              'image.max'            => "Image must be smaller then 1 mb size",
              'description.required' => "This field is required",
              'description.max'      => "Description can not be greater then 250 char",
        ];
    }
}
