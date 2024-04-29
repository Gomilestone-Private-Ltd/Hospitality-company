<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
                           'slug',
                           'c_name',
                           'c_type',
                           'name',
                           'email',
                           'contact',
                           'job_title',
                           'role_desc',
                           'city',
                           'state',
                           'pin',
                           'country',
                           'how_can_we_help',
                           'message',
                           'status',
                           'remark',
                           'updated_by',
                           'deleted_by'
                        ];
}
