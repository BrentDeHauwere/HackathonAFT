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

Route::auth();

Route::group(['middleware' => 'auth'], function()
{
	Route::get('/', 'MarkerController@index');
	Route::resource('markers', 'MarkerController');
	Route::get('/home', 'HomeController@index');
	Route::post('/marker/{id}/rate/{like}', 'RateController@store');
	Route::delete('/marker/{id}/rate', 'RateController@destroy');
	Route::post('/marker/{id}/favorite', 'FavoriteController@store');
	Route::get('/profile', function() {
		return View::make('profile');
	});
	Route::get('/coordinates', function() {
		return \App\Marker::select('lng', 'lat', 'name')->get();
	});
});
