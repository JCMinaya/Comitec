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

Route::get('/', 'HomeController@index');

Route::group(['namespace' => 'Auth'], function()
{
	//Login Routes
	Route::get('auth/login', 'AuthController@getLogin');
	Route::post('auth/login', 'AuthController@postLogin');
	Route::get('auth/logout', 'AuthController@getLogout');

	// Registration routes...
	Route::get('auth/register', 'AuthController@getRegister');
	Route::post('auth/register', 'AuthController@postRegister');

	//Password reset
	Route::get('password/email', 'PasswordController@getEmail');
	Route::post('password/email', 'PasswordController@postEmail');
	Route::get('password/reset', 'PasswordController@getReset');
	Route::post('password/reset', 'PasswordController@postReset');

});

Route::get('user/{id}', 'UserController@showProfile');

Route::get('comite/{name}', ['middleware' => 'auth', 'uses' => 'ComiteController@getComite']);
