<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    // protected $casts = [
    //                      'color'                => 'array',
    //                      'gen_image'            => 'array',
    //                      'color_varient'        => 'array',
    //                      'color_varient_images' => 'array',
    //                      'material'             => 'array',
    //                      'size'                 => 'array',
    //                      'size_varient'         => 'array',
    //                    ];

    protected $fillable= [
                          'slug',
                          'name',
                          'description',
                          'category_id',
                          'subCategory_id',
                          'sup_subCategory_id',
                          'gen_image',
                          'hsn_code',
                          'color',
                          'color_id',
                          'color_varient',
                          'color_varient_images',
                          'specification',
                          'moq',
                          'material',
                          'material_id',
                          'size',
                          'size_id',
                          'size_varient',
                          'gen_price',
                          'gen_gst',
                          'gen_stock',
                          'make_in',
                          'status',
                          'tags',
                          'meta_tags',
                          'is_varient_available',
                          'meta_url',
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
     * @method Get super sub category detail
     * @param
     * @return added by details
     */
    public function superSubCategoryDetail(){
      return $this->belongsTo(Supersubcategory::class,'sup_subCategory_id');
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
      
      /**
       * @method Get Decode format
       * @param
       * @return 
       */
      public function getGenImageAttribute($value){
        return json_decode($value);
      }

      /**
       * @method Get Decode format of material
       * @param
       * @return 
       */
      public function getMaterialAttribute($value){
        return json_decode($value);
      }

      /**
       * @method Get Decode format of color
       * @param
       * @return 
       */
      public function getColorAttribute($value){
        return json_decode($value);
      }

      /**
       * @method Get Decode format of size
       * @param
       * @return 
       */
      public function getSizeAttribute($value){
        return json_decode($value);
      }


      /**
       * @method Get Meta url
       * @param
       * @return 
       */
      public function setMetaUrlAttribute($value)
      {
        $this->attributes['meta_url'] = str_replace(' ', '-', strtolower($value));
      }
}
