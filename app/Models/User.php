<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 */
class User extends Model
{
    protected $table = 'user';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'userName',
        'profileImage',
        'isActive',
        'role_id'
    ];

    protected $guarded = [];

        
}