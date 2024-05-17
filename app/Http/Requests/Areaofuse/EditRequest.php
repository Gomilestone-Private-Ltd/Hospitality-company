<?php

namespace App\Http\Requests\Areaofuse;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\AreaOfUse;

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
        $getAreaOfUse = AreaOfUse::whereSlug($request->slug)->first();
        if(!empty($getAreaOfUse) && $getAreaOfUse->area_of_use == $request->area_of_use){
            return [
                    'area_of_use' => "required|max:15",
                   ];
        }else{
            return [
                    'area_of_use' => "required|max:15|unique:area_of_uses,area_of_use",
                   ];
        }
    }
    
    
    public function messages()
    {
        return[
                'area_of_use.required'          => "This field is required",
                'area_of_use.max'               => "Area of use Can't be greater then 15 char",
              ];
    }
}
