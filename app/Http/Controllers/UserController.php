<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\User;

class UserController extends Controller
{
    //
	
	public function getUser($id){
		$user = User::find($id);
		echo $user->name;
	}	
	
	public function getUsers(){
		$users = User::all();
		
		foreach ($users as $user) {
			echo $user->name. " - " . $user->email ;
		}
		
	}
	
}
