<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 */
class Question extends Model
{
    protected $table = 'question';

    public $timestamps = true;

    protected $fillable = [
        'question',
        'b',
        'feedback',
        'isActive',
        'isConfigured',
        'isSectionSpecific',
        'isPreTest',
        'questionType_id',
        'user_id'
    ];

    protected $guarded = [];

    public function type(){ //1 question -> 1 type
        return $this->belongsTo('App\Models\Questiontype');
    }

}
