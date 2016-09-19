<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Testtopic
 */
class Testtopic extends Model
{
    protected $table = 'testTopic';

    public $timestamps = true;

    protected $fillable = [
        'topicLevel',
        'topic_id',
        'userTest_id'
    ];

    protected $guarded = [];

        
}
