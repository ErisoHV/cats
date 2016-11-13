<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
	echo "Welcome to Cats!";
});

Route::get('hello/{name}', function($name){
	// Blade::setEscapedContentTags('[[', ']]'); // Changing Laravel blade delimiter
	echo "Hello world! and... ".$name;
});

//Route::auth();

//Route::get('/home', 'HomeController@index');
Route::group(array('prefix' => 'user'), function(){
	Route::get('/', 'UserController@getUsers');

	Route::get('/{id}', 'UserController@getUser');
	Route::get('/{id}/role', 'UserController@getRole');
});

Route::group(array('prefix' => 'role'), function(){
	Route::get('/', 'RoleController@getRoles');
	Route::get('/{id}', 'RoleController@getRole');
	Route::get('/{id}/users', 'RoleController@getUsers');
});

Route::group(array('prefix' => 'question'), function (){
  Route::get('/', 'QuestionController@getQuestions');
	Route::get('/{id}', 'QuestionController@getQuestion');
	Route::get('/{id}/type', 'QuestionController@getType');
});

Route::group(array('prefix' => 'questiontype'), function(){
	Route::get('/', 'QuestionTypeController@getQuestionTypes');
	Route::get('/{id}','QuestionTypeController@getQuestionType');
	Route::get('/{id}/questions','QuestionTypeController@getQuestions');
});

Route::group (array('prefix' => 'topic'), function(){
	Route::get('/', 'TopicController@getTopics');
	Route::get('/{id}', 'TopicController@getTopic');
	Route::get('/{id}/concepts', 'TopicController@getConcepts');
});

Route::group (array('prefix' => 'subject'), function(){
	Route::get('/', 'SubjectController@getSubjects');
	Route::get('/{id}','SubjectController@getSubject');
	Route::get('/{id}/sections', 'SubjectController@getSections');

});
