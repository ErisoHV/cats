<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subject
 */
class Subject extends Model
{
    protected $table = 'subject';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'sectionsNo',
        'isActive',
        'isConfiguredSubject',
        'isConfiguredQuestions',
        'isConfiguredConcepts',
        'isConfiguredTopics',
        'isConfiguredPreTest'
    ];

    protected $guarded = [];

    public function sections(){ // 1 Subject -> N Sections
      return $this -> hasMany('App\Models\Section');

    }


}
