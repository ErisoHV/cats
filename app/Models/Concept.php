<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Concept
 */
class Concept extends Model
{
    protected $table = 'concept';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'topic_id'
    ];

    protected $guarded = [];

    public function topic(){ //1 Concept-> 1 Topic
      return $this->belongsTo('App\Models\Topic');
    }


}
