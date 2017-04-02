<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Answer
 */
class Answer extends Model
{
    protected $table = 'answer';

    public $timestamps = true;

    protected $fillable = [
        'answer',
        'isCorrect',
        'question_id'
    ];

    protected $guarded = [];

        
}