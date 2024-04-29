<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkWithUs extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
                           'slug',
                           'name',
                           'email',
                           'message',
                           'file',
                           'size',
                           'extention',
                           'original_file',
                           'remark',
                           'status',
                           'updated_by',
                           'deleted_by'
                          ];
}


