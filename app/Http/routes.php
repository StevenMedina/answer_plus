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

// Controller and route 'Home'
Route::get('/', 'HomeController@home');

// Controller and route 'User'
Route::resource('user', 'UserController');

Route::get('/user', 'UserController@index');
Route::get('/user/{user}', 'UserController@show');
