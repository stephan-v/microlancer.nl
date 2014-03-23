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

Route::get('/', function()
{
	return View::make('index');
});

Route::resource('users', 'UsersController');

Route::get('/mailer', function() 
{
	$data = [];

	// Queue zorgt ervoor dat de email wordt verzonden op de achtergrond en de gebruiker niet hoeft te wachten op het verzenden van
	// de email maar meteen wordt doorgezonden.
	Mail::queue('emails.welcome', $data, function($message) 
	{
		$message->to('stephan-v@hotmail.com')
				->subject('Welcome!');
	});
});