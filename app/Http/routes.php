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

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');
Route::get('/', 'PageController@index');
Route::get('about', 'PageController@showAbout');
Route::get('gallery', 'PageController@showGallery');
Route::get('contact', 'PageController@create');
Route::get('widget', 'PageController@showWidget');

// Post back to /contact after submitting form
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'PageController@store']);



Route::resource('photos', 'PhotoController');

// Routes requiring authentication
Route::group(['middleware' => 'auth'], function()
{
	Route::get('photos.edit', [
    	'as' => 'photos/{id}edit', 'uses' => 'PhotoController@edit'
		]);
	Route::get('admin', 'AdminController@index');
	Route::get('admin/upload', function() {
    	return View::make('admin.upload');
	});
	// Post back to /admin/upload after submitting an image for upload
	Route::post('admin/upload', 'AdminController@upload');
	Route::get('admin/select', 'AdminController@showSelect');
	Route::delete('admin/destroy', 'AdminController@destroy');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
