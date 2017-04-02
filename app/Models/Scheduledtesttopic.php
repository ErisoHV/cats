<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scheduledtesttopic
 */
class Scheduledtesttopic extends Model
{
    protected $table = 'scheduledTestTopic';

    public $timestamps = true;

    protected $fillable = [
        'scheduledTest_id',
        'topic_id'
    ];

    protected $guarded = [];

        
}
