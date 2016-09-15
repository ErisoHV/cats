<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Topic
 */
class Topic extends Model
{
    protected $table = 'topic';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'subject_id'
    ];

    protected $guarded = [];

        
}