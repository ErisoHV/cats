<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    public function subject(){ //1 section -> 1 subject
        return $this->belongsTo('App\Models\Subject');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User','userSection');
    }

}
