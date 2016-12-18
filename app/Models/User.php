<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

/**
 * Class User
 */
class User extends Model
{
    protected $table = 'user';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'userName',
        'profileImage',
        'isActive',
        'role_id'
    ];

    protected $guarded = [];
//
    public function role(){ // 1 user -> 1 role
        return $this->belongsTo('App\Models\Role');
    }

    public function sections(){
      return $this->belongsToMany('App\Models\Section','userSection');
    }

}
