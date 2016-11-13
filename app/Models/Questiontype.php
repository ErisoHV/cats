<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Questiontype
 */
class Questiontype extends Model
{
    protected $table = 'questionType';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'maxAnswerNo'
    ];

    protected $guarded = [];

    public function questions(){
      return $this -> hasMany('App\Models\Question');
    }


}
