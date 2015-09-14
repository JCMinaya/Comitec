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
// View::composer('layouts.default', function($view)
// {
	
// 	 $view->with("friendRequest", Friend::FriendsRequest()->count());
// });

Route::get('/', 'HomeController@index');

Route::group(['namespace' => 'Auth'], function()
{
	//Login Routes
	Route::get('auth/login', 'AuthController@getLogin');
	Route::post('auth/login', 'AuthController@postLogin');
	Route::get('auth/logout', 'AuthController@getLogout');

	// Registration routes...
	// Route::get('auth/register', 'AuthController@getRegister');
	// Route::post('auth/register', 'AuthController@postRegister');

	// Password reset
	// Route::get('password/email', 'PasswordController@getEmail');
	// Route::post('password/email', 'PasswordController@postEmail');
	// Route::get('password/reset', 'PasswordController@getReset');
	// Route::post('password/reset', 'PasswordController@postReset');

});


Route::group(['namespace' => 'Comite'], function()
{
	Route::get('comite/{abrev}', 'ComiteController@showComitePosts');

	Route::group(['middleware' => ['auth', 'member']], function()
	{
		Route::get('comite/{abrev}/dashboard', ['as' => 'comite.dashboard', 'uses' => 'ComiteController@showDashboard']);

		Route::get('comite/{abrev}/dashboard/message', 'ComiteController@showMessages');
		Route::resource('comite/{abrev}/dashboard/post', 'PostController', [
			'names' => [
				'index' => 'post.index',
				'store' => 'post.store'
		]
		]);
		Route::resource('comite/{abrev}/dashboard/poll', 'PollController', [
			'names' => [
				'index' => 'poll.index',
				'store' => 'poll.store'
			]
		]);
		// Route::get('comite/{abrev}/dashboard/postForm', 'ComiteController@showPostForm');
		// Route::get('comite/{abrev}/dashboard/pollForm', 'ComiteController@showPollForm');
		// Route::post('comite/{abrev}/dashboard/postForm', 'ComiteController@createPost');
		// Route::post('comite/{abrev}/dashboard/pollForm', 'ComiteController@createPoll');
	});
});

Route::get('student/{id}', 'UserController@showProfile');
