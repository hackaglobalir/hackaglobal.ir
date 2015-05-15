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

Route::get('/', 'WelcomeController@index');

Route::get('cp_admin/homeinfo','AdminController@homeInfo');

Route::post('cp_admin/homeinfo','AdminController@updateHomeInfo');

Route::get('home', 'HomeController@index');

Route::get('login', 'LoginController@index');

Route::post('login', 'LoginController@checkLogin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
