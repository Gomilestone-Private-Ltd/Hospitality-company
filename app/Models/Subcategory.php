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

}
