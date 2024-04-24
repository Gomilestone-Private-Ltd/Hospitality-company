<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VarientValue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
                           'slug',
                           'varient_value_label',
                           'varient_value',
                           'status',
                           'added_by',
                           'updated_by',
                           'deleted_by'
                          ];
}
