<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Useranswer
 */
class Useranswer extends Model
{
    protected $table = 'userAnswer';

    public $timestamps = true;

    protected $fillable = [
        'question_id',
        'answer_id',
        'userTest_id'
    ];

    protected $guarded = [];

        
}
