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
|  Not Best practice. Catch all routes, send them to angular.
|--------------------------------------------------------------------------
*/
App::missing(function($exception)
{
   return View::make('index');
});

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
|--------------------------------------------------------------------------
<<<<<<< HEAD
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

=======
| API v1 Routes
|--------------------------------------------------------------------------
*/
Route::api(['version' => 'v1', 'prefix' => 'api', 'protected' => true], function()
{
   Route::post('login', ['uses' => 'AuthController@validate', 'protected' => false]);
   Route::get('logout', ['uses' => 'AuthController@logout']);
   Route::get('display', ['uses' => 'PageController@display']);
   Route::get('testCourseSearch', ['uses' => 'PageController@testCourseNameSearch']);
   Route::get('testInstructorSearch', ['uses' => 'PageController@testInstructorSearch']);
   Route::get('testDescriptionSearch', ['uses' => 'PageController@testDescriptionSearch']);
   Route::resource('courseoutline', ['uses' => 'CourseOutlineController', ['only' => ['create', 'store', 'show']]);
});
>>>>>>> a113e8f83756485c8d267bbd8e66612df6184604
