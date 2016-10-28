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

/**
 * Api Routes
 */

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ( $api ) {
	$api->get('hello', function () {
		return "Hello!";
	});
});

// Controller and route 'Home'
Route::get('/', 'ForumController@index');

// Controller Forum
Route::get('/index', 'HomeController@index');

// Controller and route 'User'
Route::resource('user', 'UserController');

Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@store');
Route::get('/user/{user}', 'UserController@show');

// Show Profile
Route::get('/user/profile/{user}', 'UserController@showProfile');

// Documentacion
Route::get('/documentation', function () {
    return view('documentation.documentation');
});

Route::auth();
