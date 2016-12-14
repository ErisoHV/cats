<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

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

    /*public static function users($section_id){
        $userSections = Usersection::where('section_id', $section_id)->pluck('user_id');
        if ($userSections != null){
          return User::findMany($userSections);
        }
        return null;
    }*/
}
