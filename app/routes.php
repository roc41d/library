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
	return View::make('site.home');

});

Route::get('/admin-login', function()
{
	return View::make('admin.login');

});

Route::get('/member-login', function()
{
    return View::make('member.login');

});

Route::get('/test', function()
{
    $data = date("d") + 3;


    return $data;

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
//Route::get('login', 'SessionController@login');
Route::post('login', 'SessionController@handleLogin')->before('csrf');
Route::get('register', 'SessionController@register');
Route::post('register', 'SessionController@handleRegister')->before('csrf');

Route::group(array('before' => 'auth'), function(){

    Route::controller('admin', 'AdminController');

});

Route::controller('member', 'MemberController');


