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

/*
|--------------------------------------------------------------------------
| Angular Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function()
{
   return View::make('index'); // will return app/views/index.php
});

/*
|  Not Best practice. add controller to catch these routes
*/
App::missing(function($exception)
{
   return View::make('index');
});

/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
*/
Route::get ('login', 'PageController@login');

Route::group(array('prefix' => 'api'), function() {
   Route::resource('display', 'PageController@display');
   Route::resource('testCourseSearch', 'PageController@testCourseNameSearch');
   Route::resource('testInstructorSearch', 'PageController@testInstructorSearch');
   Route::resource('testDescriptionSearch', 'PageController@testDescriptionSearch');
   Route::resource('courseoutline', 'CourseOutlineController', array('only' => array('create', 'store', 'show')));
});   

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::post('login', 'AuthController@validate');
Route::get ('logout', array(
      'before' => 'auth',
      'uses' => 'AuthController@logout'
   )
);

/*
|--------------------------------------------------------------------------
| Miscellanious Routes
|--------------------------------------------------------------------------
|
| Routes that will most likely get removed before merging with production
|
*/
Route::get('/new', function()
{
   User::create([
         'first_name' => 'Joshua',
         'last_name' => 'Bennett',
         'email'  => 'jdbnc93@aol.com',
         'password' => Hash::make('1234')
      ]);
   return 'hi';
});
