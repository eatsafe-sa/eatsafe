<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Route::get('/test', function () {
// 	Session::flash('errorMessage', 'testing');
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@showWelcome');

Route::get('/map', 'HomeController@showMap');
Route::get('/team', 'HomeController@showTeam');
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');
Route::resource('comments', 'CommentController');
Route::resource('users', 'UsersController');

