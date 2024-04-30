<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable= [
                          'slug',
                          'name',
                          'title',
                          'description',
                          'is_varient_required',
                          'category_id',
                          'subcategory_id',
                          'supsubcategory_id',
                          'specification',
                          'product_code',
                          'dimention',
                          'pack_of',
                          'material',
                          'make_in',
                          'thumbnail',
                          'price',
                          'mrp',
                          'varient_type',
                          'varient_value',
                          'varient_detail',
                          'status',
                          'stock',
                          'tags',
                          'added_by',    
                          'updated_by',
                          'deleted_by',
                        ];
                                          
    /**
     * @method Get aded by details
     * @param
     * @return added by details
     */
    public function addedBy(){
        return $this->belongsTo(Admin::class,'added_by');
    }
  
      /**
       * @method Get Created At
       * @param
       * @return 
       */
      public function getCreatedAtAttribute($value){
        //return Carbon::parse($value)->format('M d Y');
        //return Carbon::parse($value)->format('d-m-Y');
        return Carbon::parse($value)->format('d M Y');
      }
}
