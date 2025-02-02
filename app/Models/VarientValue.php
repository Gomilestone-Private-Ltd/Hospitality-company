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
                           'varient_type_id',
                           'varient_label_name',
                           'varient_label_value',
                           'status',
                           'added_by',
                           'updated_by',
                           'deleted_by'
                          ];
}

