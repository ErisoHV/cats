<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use App\Models\Subject;

/**
 * Class Usersection
 */
class Usersection extends Model
{
    protected $table = 'userSection';

    public $timestamps = true;

    protected $fillable = [
        'initialLevel',
        'user_id',
        'section_id'
    ];

    protected $guarded = [];

    public static function users($section_id){
        return Section::find($section_id)->users;
    }

    public static function sectionsByUser($user_id){
        return User::find($user_id)->sections;
    }

    public static function userInitialLevelInSection($user_id, $section_id){
        return Usersection::where([
            ['user_id', $user_id],
            ['section_id', $section_id]
          ]
        )->pluck('initialLevel');
    }

    public static function getAllInitialLevelBySection($section_id){
      return Usersection::where('section_id', $section_id)->pluck('initialLevel');
    }

    public static function getAllInitialLevelBySubject($subject_id){
      $subject = Subject::find($subject_id);
      if (!empty($subject)){
        $sections = $subject->sections->pluck('id');
        $userSection = array();
        if(!empty($sections))
            $userSection = Usersection::whereIn('section_id', $sections)->get();

        return $userSection->pluck('initialLevel');
      }
      return [];
    }

}
