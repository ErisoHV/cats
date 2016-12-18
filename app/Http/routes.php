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
	Route::get('/{id}/role', 'UserController@getRole');
	Route::get('/{id}/sections', 'UserSectionController@getSectionsByUser');
	Route::get('/{user_id}/sections/{section_id}/level', 'UserSectionController@getInitialLevelByUserSection');
});
	Route::resource('/user', 'UserController');

/*
* 	Role routes
*/

Route::group(array('prefix' => 'role'), function(){
	Route::get('/{id}/users', 'RoleController@getUsers');
});
	Route::resource('/role', 'RoleController');

/*
*	Question routes
*/
Route::group(array('prefix' => 'question'), function (){
	Route::get('/{id}/type', 'QuestionController@getType');
});
	Route::resource('/', 'QuestionController');

/* 
* Question Type routes
*/
Route::group(array('prefix' => 'questiontype'), function(){
	Route::get('/{id}/questions','QuestionTypeController@getQuestions');
});
	Route::resource('/questiontype', 'QuestionTypeController');


/*
* 	Topic routes
*/
Route::group (array('prefix' => 'topic'), function(){
	Route::get('/{id}/concepts', 'TopicController@getConcepts');
});
	Route::resource('/topic', 'TopicController');

/**
*	Concept routes
**/
Route::group (array('prefix' => 'concept'), function(){
	Route::get('/{id}/topic', 'ConceptController@getTopic');
});
	Route::resource('/concept', 'ConceptController');

/*
* 	Subject routes
*/
Route::group (array('prefix' => 'subject'), function(){
	Route::get('/{id}/sections', 'SubjectController@getSections');
});
	Route::resource('/subject', 'SubjectController');

/* 
* 	Section routes 
*/
Route::group (array('prefix' => 'section'), function(){
	Route::get('/{id}/subject', 'SectionController@getSubject');
	Route::get('/{id}/users', 'UserSectionController@getUsers');
});
	Route::resource('/section', 'SectionController');
