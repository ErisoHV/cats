<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Questiontopic
 */
class Questiontopic extends Model
{
    protected $table = 'questiontopic';

    public $timestamps = true;

    protected $fillable = [
        'question_id',
        'topic_id'
    ];

    protected $guarded = [];

        
}