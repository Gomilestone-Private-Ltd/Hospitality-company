<?php

namespace App\Http\Requests\Product;

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
                'product_name'     => "required|max:100",
                'description'      => "required|max:10000",
                'category'         => "required",
                'subcategory'      => "required",
                'supersubcategory' => "required",
                'hsn_code'         => "required|max:20",
                'specification'    => "max:5000|mimes:pdf",
                'general_price'    => "required|numeric|gt:0",
                'general_gst'      => "required|numeric|gt:0|max:100",
                'moq'              => "required|numeric|gt:0",
                //'product_img'      => "required|array",
                'material'         => 'required|array',
                'idealfor'         => 'required|array',
                'areaOfuse'        => 'required|array'
               ];
    }
    
    
    public function messages()
    {
        return[
              'product_name.required'      => "This field is required",
              'product_name.max'           => "Name can not be greater then 100 char",
              'description.required'       => "This field is required",
              'description.max'            => "Description can not be greater then 10000 char",
              'category.required'          => "This field is required",
              'category.max'               => "Size type can not be greater then 10 char",
              'subcategory.required'       => "This field is required",
              'subcategory.max'            => "Size type can not be greater then 10 char",
              'supersubcategory.required'  => "This field is required",
              'supersubcategory.max'       => "Size type can not be greater then 10 char",
              'hsn_code.required'          => "This field is required",
              'hsn_code.max'               => "Hsn code can not be greater then 20 char",
              'specification.required'     => "This field is required",
              'specification.max'          => "Size can not be greater then 5 mb",
              'specification.mimes'        => "Specification must be in PDF only",
              'general_price.required'     => "This field is required",
              'general_gst.required'       => "This field is required",
              'general_gst.max'            => "Gst can not be greater then 100",
              'moq.required'               => "This field is required",
              'moq.max'                    => "Size type can not be greater then 10 char",
              'genImage.required'          => "This field is required",
              'genImage.max'               => "Size type can not be greater then 10 char",
              'material.required'          => "This field is required",
              'idealfor.required'          => "This field is required",
              'areaOfuse.required'         => "This field is required",
        ];
    }
}
