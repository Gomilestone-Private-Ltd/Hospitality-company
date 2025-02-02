<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, SoftDeletes;
    
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
