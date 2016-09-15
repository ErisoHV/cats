<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scheduledtest
 */
class Scheduledtest extends Model
{
    protected $table = 'scheduledtest';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'dateTest',
        'section_id'
    ];

    protected $guarded = [];

        
}