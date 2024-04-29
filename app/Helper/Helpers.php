<?php 

use App\Models\VarientType;
use App\Models\VarientValue;

if (!function_exists('getVarientLabelValue')) {
    
    /**
     * @method Get Varient Label Value
     * @param id
     * @return varient label value
     */
    function getVarientLabelValue($id)
    {
        $getLabelValue = VarientValue::whereId($id)->first();
        return $getLabelValue->varient_label_value ??'';
    }
}

    if(!function_exists('getVarientType')){

        /**
         * @method Get Varient type i.e color(0)/text(1)
         * @param id
         * @return varient type key
         */
        function getVarientType($id){
            $getVarientTypekey = VarientType::whereId($id)->first();
            return $getVarientTypekey->varient_type ??'';
        }
    }