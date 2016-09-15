<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Questiontype
 */
class Questiontype extends Model
{
    protected $table = 'questiontype';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'maxAnswerNo'
    ];

    protected $guarded = [];

        
}