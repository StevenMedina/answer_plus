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

// Controller Categories
Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{id}', 'CategoriesController@getCategorieById');
Route::post('/categories/new', 'CategoriesController@create');


// COntroller Sub Categories
Route::get('/subcategories', 'SubCategoriesController@index');
Route::get('/subcategories/{id}', 'SubCategoriesController@getSubCategoriesById');
Route::post('/subcategories/new', 'SubCategoriesController@create');

// Controller Question
Route::get('/questions', 'QuestionController@index');
Route::get('/questions/{id}', 'QuestionController@getQuestionById');
Route::post('/questions/new', 'QuestionController@create');

// Controller Answer
Route::get('/answer', 'AnswerController@index');
Route::get('/answer/{id}', 'AnswerController@getAnswerById');
Route::post('/answer/new', 'AnswerController@create');

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
