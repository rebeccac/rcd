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

Route::get('home', 'HomeController@index');

Route::resource('photos', 'PhotoController');
Route::get('gallery', 'PhotoController@index');


// Routes requiring authentication
Route::group(['middleware' => 'auth'], function()
{
	Route::get('photos.edit', [
    	'as' => 'photos/{id}edit', 'uses' => 'PhotoController@edit'
		]);
	Route::get('admin', 'AdminController@index');
	Route::get('admin/select', 'AdminController@showSelect');
	Route::delete('admin/destroy', 'AdminController@destroy');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
