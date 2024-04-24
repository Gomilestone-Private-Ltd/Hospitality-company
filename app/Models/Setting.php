<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
                           'slug',
                           'app_name',
                           'email',
                           'contact',
                           'address',
                           'logo',
                           'favicon',
                           'ip',
                           'added_by',
                           'updated_by'
                         ];
}