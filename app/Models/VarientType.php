<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VarientType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
                            'slug',
                            'varient_type_name',
                            'varient_type',
                            'status',
                            'added_by',
                            'updated_by',
                            'deleted_by'
                          ];
}