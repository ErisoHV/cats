<?php

namespace App\Http\Controllers;

use App\Models\Role;

class RoleController extends Controller
{
    public function getRole($id){
    		return Role::find($id);
    }

    public function getRoles(){
        return Role::all();
    }

    public function getUsers($id){
        $role = $this->getRole($id);
        if ($role != null){
            return $role->users;
        }
        return null;
    }
}
