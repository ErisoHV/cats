<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Questionconcept
 */
class Questionconcept extends Model
{
    protected $table = 'questionConcept';

    public $timestamps = true;

    protected $fillable = [
        'question_id',
        'concept_id'
    ];

    protected $guarded = [];

        
}
