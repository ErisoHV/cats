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

/*
* User routes
*/
Route::group(array('prefix' => 'user'), function(){
	Route::resource('/', 'UserController');
	Route::get('/{id}', 'UserController@show');
	Route::get('/{id}/role', 'UserController@getRole');
	Route::get('/{id}/sections', 'UserSectionController@getSectionsByUser');
	Route::get('/{user_id}/sections/{section_id}/level', 'UserSectionController@getInitialLevelByUserSection');
});

/*
* 	Role routes
*/

Route::group(array('prefix' => 'role'), function(){
	Route::resource('/', 'RoleController');
	Route::get('/{id}', 'RoleController@show');
	Route::get('/{id}/users', 'RoleController@getUsers');
});

/*
*	Question routes
*/
Route::group(array('prefix' => 'question'), function (){
  	Route::resource('/', 'QuestionController');
	Route::get('/{id}', 'QuestionController@show');
	Route::get('/{id}/type', 'QuestionController@getType');
});

/* 
* Question Type routes
*/
Route::group(array('prefix' => 'questiontype'), function(){
	Route::resource('/', 'QuestionTypeController');
	Route::get('/{id}','QuestionTypeController@show');
	Route::get('/{id}/questions','QuestionTypeController@getQuestions');
});


/*
* 	Topic routes
*/
Route::group (array('prefix' => 'topic'), function(){
	Route::resource('/', 'TopicController');
	Route::get('/{id}', 'TopicController@show');
	Route::get('/{id}/concepts', 'TopicController@getConcepts');
});

/**
*	Concept routes
**/
Route::group (array('prefix' => 'concept'), function(){
	Route::resource('/', 'ConceptController');
	Route::get('/{id}','ConceptController@show');
	Route::get('/{id}/topic', 'ConceptController@getTopic');
});

/*
* 	Subject routes
*/
Route::group (array('prefix' => 'subject'), function(){
	Route::resource('/', 'SubjectController');
	Route::get('/{id}','SubjectController@show');
	Route::get('/{id}/sections', 'SubjectController@getSections');
});

/* 
* 	Section routes 
*/
Route::group (array('prefix' => 'section'), function(){
	Route::resource('/', 'SectionController');
	Route::get('/{id}','SectionController@show');
	Route::get('/{id}/subject', 'SectionController@getSubject');
	Route::get('/{id}/users', 'UserSectionController@getUsers');
});
