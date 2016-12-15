<?php

namespace App\Http\Controllers;
use App\Models\Topic;

class TopicController extends Controller
{
  public function getTopics(){
    return Topic::all();
  }

  public function getTopic($id){
    return Topic::find($id);
  }

  public function getConcepts($id){
    $topic = $this -> getTopic($id);
    if (!empty($topic)){
      return $topic -> concepts;
    }
    return [];
  }

}
