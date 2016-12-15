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
		if (!empty($questionType)){
			return $questionType -> questions;
		}
		return [];
	}

}
