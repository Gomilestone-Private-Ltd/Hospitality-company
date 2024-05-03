<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'slug',
    'name',
    'type',
    'image',
    'description',
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
  public function addedBy()
  {
    return $this->belongsTo(Admin::class, 'added_by');
  }

  /**
   * @method Get Created At
   * @param
   * @return 
   */
  public function getCreatedAtAttribute($value)
  {
    //return Carbon::parse($value)->format('M d Y');
    //return Carbon::parse($value)->format('d-m-Y');
    return Carbon::parse($value)->format('d M Y');
  }

  /**
   * @method Get Category list
   * @param
   * @return 
   */
  public function getSubCategory()
  {
    return $this->hasMany(Subcategory::class)->with('getSuperSubCategory')->where('status', 1);
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