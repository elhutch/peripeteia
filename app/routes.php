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
| Page Routes
|--------------------------------------------------------------------------
*/
Route::get ('/',     'PageController@index');
Route::get ('login', 'PageController@login');


/*
|--------------------------------------------------------------------------
| Course Outline Routes
|--------------------------------------------------------------------------
*/
Route::group(array('before' => 'auth'), function()
{
   Route::get ('courseoutline/create', array(
         'uses' => 'CourseOutlineController@create'
      )
   );
   Route::get ('courseoutline/show', array(
         'uses' => 'CourseOutlineController@show'
      )
   );
   Route::post('courseoutline/store', array(
         'uses' => 'CourseOutlineController@store'
      )
   );
});


/*
|--------------------------------------------------------------------------
| Directory  Routes
|--------------------------------------------------------------------------
*/
Route::get('directory', 'UserController@index');
Route::post('directory/search', 'UserController@search');


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

