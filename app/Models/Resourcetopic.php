<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resourcetopic
 */
class Resourcetopic extends Model
{
    protected $table = 'resourcetopic';

    public $timestamps = true;

    protected $fillable = [
        'resource_id',
        'topic_id'
    ];

    protected $guarded = [];

        
}