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

$app['router']->get('/', function() use ($app)
{
   return View::make('hello');
});

Route::get('register',[
	'as' => 'register_path',
	'uses' => 'RegistrationController@create'
]);
