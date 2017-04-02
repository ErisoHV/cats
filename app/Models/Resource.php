<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resource
 */
class Resource extends Model
{
    protected $table = 'resource';

    public $timestamps = true;

    protected $fillable = [
        'path',
        'isSectionSpecific',
        'user_id'
    ];

    protected $guarded = [];

        
}