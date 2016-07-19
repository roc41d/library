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
	return View::make('site.login');

});

Route::get('admin', function()
{
	return View::make('admin.addstudent');

});

/*
    |--------------------------------------------------------------------------
    | Session Controller Routes
    |--------------------------------------------------------------------------
    |
    | Routes to handle session things
    |
    */
Route::get('logout', 'SessionController@logout');
Route::get('login', 'SessionController@login');
Route::post('login', 'SessionController@handleLogin')->before('csrf');
Route::get('register', 'SessionController@register');
Route::post('register', 'SessionController@handleRegister')->before('csrf');

/*Route::group(array('before' => 'auth'), function(){

    Route::controller('admin', 'AdminController');

});
*/

