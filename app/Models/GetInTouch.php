<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GetInTouch extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
                           'slug',
                           'name',
                           'email',
                           'message',
                           'status',
                           'remark',
                           'updated_by',
                           'deleted_by'
                          ];
}