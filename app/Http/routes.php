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

View::composer('includes.sidebar', function($view)
{
    $path = Request::path();
    $polls = \App\Poll::where('public', 1)
    					->where('active', 1)
    					->orderBy('created_at')->get();

    if($path == '/')
    {
    	if(Auth::check())
    	{
    		$user = Auth::user();
	        $major = \App\Major::find($user->major_id);
	        $pollsFilterByMajor = $major->polls()->where('active', 1)
	        							->where('major_id', $major->id)
	        							->orderBy('created_at')->get();

	        $polls = $pollsFilterByMajor->merge($polls);
    	}
    }

    if(Request::is('comite/*')){
	    
	    $abrev = explode('/', Request::path())[1];
	    $comite = \App\Comite::where('abreviation', $abrev)->first();
	    
    	if(Auth::check()){
	    	$user = Auth::user();
	        $major = \App\Major::find($user->major_id);
	        $pollsFilterByMajor = $major->polls()->where('active', 1)
	        							->where('comite_id', $comite->id)
	        							->orderBy('created_at')->get();

			$pollsPublic = \App\Poll::where('public', 1)
									->where('active', 1)
	                              	->where('comite_id', $comite->id)
	                              	->orderBy('created_at')->get();

	        $polls = $pollsFilterByMajor->merge($pollsPublic);	
    	}
    	else{
    		$polls = \App\Poll::where('public', 1)
    						  ->where('active', 1)
	                          ->where('comite_id', $comite->id)
	                          ->orderBy('created_at')->get();
    	}
    }
    // dd($polls);

    $view->with(['polls' => $polls]);
});

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
	Route::get('comite/{abrev}', ['as' => 'comite.posts', 'uses' => 'ComiteController@showComitePosts']);

	Route::group(['middleware' => ['auth', 'member']], function()
	{

		Route::get('comite/{abrev}/dashboard', ['as' => 'comite.dashboard', 'uses' => 'ComiteController@showDashboard']);

		Route::get('comite/{abrev}/dashboard/message', 'MessageController@index');

		Route::resource('comite/{abrev}/dashboard/post', 'PostController', [
			'names' => [
				'index' => 'post.index',
				'store' => 'post.store',
				'update' => 'post.update',
				'destroy' => 'post.destroy'
			]
		]);
		Route::resource('comite/{abrev}/dashboard/poll', 'PollController', [
			'names' => [
				'index' => 'poll.index',
				'store' => 'poll.store',
				'update' => 'poll.update',
				'destroy' => 'poll.destroy'
			]
		]);
		Route::post('comite/{abrev}/dashboard/poll/{id}', [
			'as' => 'poll.store_result', 
			'uses' => 'PollController@store_result'
		]);
	});

});

Route::group(['middleware' => 'auth'], function()
{
	Route::post('comite/{abrev}/dashboard/message', [
		'as' => 'message.store',
		'uses' => 'Comite\MessageController@store'
		]);

	Route::post('comment/{post_id}/{abrev}/{pathinfo}', [
		'as' => 'comment',
		'uses' => 'CommentController@store'
		]);
});