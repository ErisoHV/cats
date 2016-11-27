<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Subject;

class SubjectController extends Controller{

  public function getSubjects(){
    return Subject::all();
  }

  public function getSubject($id){
    return Subject::find($id);
  }

  public function getSections($id){
    $subject = $this -> getSubject($id);
    if ($subject != null){
      return $this -> sections;
    }
    return null;
  }
}
