<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory,SoftDeletes;
    
    protected $fillable = [
                            'slug',
                            'role',
                            'name',
                            'email',
                            'contact',
                            'avtar',
                            'status',
                            'password',
                            'c_password',
                            'address',
                            'added_by',
                            'updated_by',
                            'deleted_by'
                          ];

    protected $hidden = [
                         'remember_token',
                        ];
}
