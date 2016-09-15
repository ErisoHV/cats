<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scheduledtestconcept
 */
class Scheduledtestconcept extends Model
{
    protected $table = 'scheduledtestconcept';

    public $timestamps = true;

    protected $fillable = [
        'scheduledTest_id',
        'concept_id'
    ];

    protected $guarded = [];

        
}