<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Section;

class SectionController extends Controller
{
    public function getSections(){
      return Section::all();
    }

    public function getSection($id){
      return Section::find($id);
    }

    public function getSubject($id){
      $section = $this->getSection($id);
      if($section != null){
        return $section -> subject;
      }
      return null;
    }
}
