<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

/**
 * Class User
 */
class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    
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
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
