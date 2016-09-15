<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Testconcept
 */
class Testconcept extends Model
{
    protected $table = 'testconcept';

    public $timestamps = true;

    protected $fillable = [
        'conceptLevel',
        'concept_id',
        'userTest_id'
    ];

    protected $guarded = [];

        
}