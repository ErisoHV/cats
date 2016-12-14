<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Usersection;

class UserSectionController extends Controller
{
    //

    public function getUsers($id_section){
        return Usersection::users($id_section);
    }
}
