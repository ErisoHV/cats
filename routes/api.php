<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

/*
* User routes
*/
Route::group(array('prefix' => 'user'), function(){
  Route::group(array('prefix' => 'find'), function(){
    Route::get('/name/{name}', 'UserController@getUserByUserName');
    Route::get('/active', 'UserController@getActiveUsers');
    Route::get('/nonactive', 'UserController@getNonActiveUsers');
  });
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
	Route::resource('/question', 'QuestionController');

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
