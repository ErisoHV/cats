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
	echo "Hello world! and... ".$name;
});

Route::get('user/{id}', 'UserController@getUser');
Route::get('user', 'UserController@getUsers');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/user/role/{id}', 'UserController@getRole');

Route::get('/role/user/{id}', 'RoleController@getUsers');
