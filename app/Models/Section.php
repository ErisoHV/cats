<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Section
 */
class Section extends Model
{
    protected $table = 'section';

    public $timestamps = true;

    protected $fillable = [
        'section',
        'description',
        'subject_id'
    ];

    protected $guarded = [];

        
}