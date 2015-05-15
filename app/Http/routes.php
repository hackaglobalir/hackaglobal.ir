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

Route::get('logout', 'LoginController@logout');

Route::get('login', 'LoginController@index');

Route::get('cp_admin/socials','AdminController@socialInfo');

Route::post('cp_admin/socials','AdminController@updateSocialInfo');

Route::get('settings','LoginController@updatePage');

Route:get('cp_admin/cities',function(){
   return view('admin_city');
});

Route::get('/cp_admin/contacts',function(){
    return view('admin_contactus');
});

Route::get('/cp_admin',function(){
    return view('admin');
});

Route::get('/cp_admin/events',function(){
    return view('admin_event');
});

Route::get('/cp_admin/skills',function(){
    return view('admin_skills');
});

Route::post('login', 'LoginController@checkLogin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
