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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'admin']], function() {
	Route::get('/admin/home', function () {
	    return view('admin.home');
	});

	Route::get('/admin/account/edit', 'Admin\AccountController@getEditAccount');
	Route::post('/admin/account/edit', 'Admin\AccountController@postEditAccount');
});

Route::get('/helloworld', function () {
    return 'helloworld!';
});

// Route::auth();

// Route::get('/home', 'HomeController@index');

Route::get('/admin', function () {
	return view('admin/home');
});

Route::get('/admin/login', function () {
	return view('admin/auth/login');
});

Route::post('/admin/login', 'Admin\AuthController@postLogin');