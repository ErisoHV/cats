<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resourceconcept
 */
class Resourceconcept extends Model
{
    protected $table = 'resourceConcept';

    public $timestamps = true;

    protected $fillable = [
        'resource_id',
        'concept_id'
    ];

    protected $guarded = [];

        
}
