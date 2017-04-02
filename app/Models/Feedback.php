<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 */
class Feedback extends Model
{
    protected $table = 'feedback';

    public $timestamps = true;

    protected $fillable = [
        'resource_id',
        'userTest_id'
    ];

    protected $guarded = [];

        
}