<?php

namespace App\Http\Controllers;
use App\Models\Questiontype;

class QuestionTypeController extends Controller
{
	public function getQuestionType($id){
		return QuestionType::find($id);
	}

	public function getQuestionTypes(){
		return QuestionType::all();
	}

	public function getQuestions($id){
		$questionType = $this -> getQuestionType($id);
		if ($questionType != null){
			return $questionType -> questions;
		}
		return null;
	}

}
