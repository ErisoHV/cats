<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuestionController extends Controller
{

    public function getQuestion($id){
      return Question::find($id);
    }

    public function getQuestions(){
      return Question::all();
    }

    public function getType($id){
      $question = $this->getQuestion($id);
      if ($question != null){
        return $question -> type;
      }
      return null;
    }
}
