<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Concept;

class ConceptController extends Controller
{
    //
    public function getConcepts(){
      return Concept::all();
    }

    public function getConcept($id){
      return Concept::find($id);
    }

    public function getTopic($id){
      $concept = $this -> getConcept($id);
      if ($concept != null){
        return $concept -> topic;
      }
      return null;
    }
}
