<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usertest
 */
class Usertest extends Model
{
    protected $table = 'userTest';

    public $timestamps = true;

    protected $fillable = [
        'questionsNo',
        'date',
        'isSuggested',
        'knowledgeLevel',
        'user_id'
    ];

    protected $guarded = [];

        
}
