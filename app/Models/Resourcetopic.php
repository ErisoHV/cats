<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resourcetopic
 */
class Resourcetopic extends Model
{
    protected $table = 'resourceTopic';

    public $timestamps = true;

    protected $fillable = [
        'resource_id',
        'topic_id'
    ];

    protected $guarded = [];

        
}
