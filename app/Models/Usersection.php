<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usersection
 */
class Usersection extends Model
{
    protected $table = 'usersection';

    public $timestamps = true;

    protected $fillable = [
        'initialLevel',
        'user_id',
        'section_id'
    ];

    protected $guarded = [];

        
}