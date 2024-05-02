<?php

namespace App\Http\Requests\Product;

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
                'product_name'     => "required|max:15",
                'description'      => "required|max:10",
                'category'         => "required|max:10",
                'subcategory'      => "required|max:10",
                'supersubcategory' => "required|max:10",
                'hsn_code'         => "required|max:10",
                'specification'    => "required|max:10",
                'general_price'    => "required|max:10",
                'general_gst'      => "required|max:10",
                'moq'              => "required|max:10",
                'genImage'         => "required|max:10",
                'product_img'      => "required|array",
                'product_img.*'    => 'image|mimes:jpg,jpeg'
        ];
    }
    
    
    public function messages()
    {
        return[
              'product_name.required'      => "This field is required",
              'product_name.max'           => "Size can not be greater then 15 char",
              'description.required'       => "This field is required",
              'description.max'            => "Size type can not be greater then 10 char",
              'category.required'          => "This field is required",
              'category.max'               => "Size type can not be greater then 10 char",
              'subcategory.required'       => "This field is required",
              'subcategory.max'            => "Size type can not be greater then 10 char",
              'supersubcategory.required'  => "This field is required",
              'supersubcategory.max'       => "Size type can not be greater then 10 char",
              'hsn_code.required'          => "This field is required",
              'hsn_code.max'               => "Size type can not be greater then 10 char",
              'specification.required'     => "This field is required",
              'specification.max'          => "Size type can not be greater then 10 char",
              'general_price.required'     => "This field is required",
              'general_price.max'          => "Size type can not be greater then 10 char",
              'general_gst.required'       => "This field is required",
              'general_gst.max'            => "Size type can not be greater then 10 char",
              'moq.required'               => "This field is required",
              'moq.max'                    => "Size type can not be greater then 10 char",
              'genImage.required'          => "This field is required",
              'genImage.max'               => "Size type can not be greater then 10 char",
              'product_img.required'          => "This field is required",
              'product_img.mimes'               => "Size type can not be greater then 10 char",
        ];
    }
}










