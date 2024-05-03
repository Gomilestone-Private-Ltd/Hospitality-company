<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable= [
                          'slug',
                          'category_id',
                          'name',
                          'image',
                          'description',
                          'status',
                          'meta_url',
                          'added_by',
                          'updated_by',
                          'deleted_by'
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
     * @method Get aded by details
     * @param
     * @return category by details
     */
    public function getCategory(){
      return $this->belongsTo(Category::class,'category_id');
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
     * @method Get Created At
     * @param
     * @return 
     */
    public function getSuperSubCategory(){
      
        return $this->hasMany(Supersubcategory::class,'subcategory_id','id')->where('status',1);
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
