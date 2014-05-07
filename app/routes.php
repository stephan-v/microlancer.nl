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

Route::get('/', ['as' => 'home', function()
{
	return View::make('index');
}]);

Route::resource('users', 'UsersController');
Route::resource('contests', 'ContestsController');
Route::resource('contests.entries', 'EntriesController');


// Activate account with this email link
Route::get('/registration/verify/{confirmation}', ['as' => 'users.activate', function($confirmation) {

	// Get the user with that confirmation code
	$user = User::where('confirmation', '=', $confirmation)->first();

	// If that user has been found set their confirmedstatus to 1
	if( $user ) {
		$user->confirmed = 1;
		$user->save();
	}	

	return Redirect::route('home');

}]);

// User authentication - Login
Route::get('login', ['as' => 'users.login', 'uses' => 'UsersController@login']);

Route::post('login', 'UsersController@logincheck');

Route::get('logout', ['as' => 'users.logout', 'uses' => 'UsersController@logout']);