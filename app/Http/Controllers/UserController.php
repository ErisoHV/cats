<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
	public function getUser($id){
		return User::find($id);
	}

	public function getUsers(){
		return User::all();
	}

  public function getRole($id){
      $user = $this->getUser($id);
      if ($user != null){
          return $user->role;
      }
      return null;
  }
}
