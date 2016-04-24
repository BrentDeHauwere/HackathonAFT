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
		$user_id = Auth::user()->id;
		$user = \App\User::with('markers')->find($user_id);

		foreach ($user->markers as $marker)
		{
			$marker->like = \App\Rate::where('marker_id', '=', $marker->id)->where('like', '=', true)->count();
			$marker->dislike = \App\Rate::where('marker_id', '=', $marker->id)->where('like', '=', false)->count();
			$marker->favorite = $marker->favorites()->count();
		}

		$user->like = \App\Rate::where('user_id', '=', $user_id)->where('like', '=', true)->count();
		$user->dislike = \App\Rate::where('user_id', '=', $user_id)->where('like', '=', false)->count();
		$user->favorite = \App\Favorite::where('user_id', '=', $user_id)->count();

		return View::make('profile')->withUser($user);
	});
	Route::get('/coordinates', function() {
		return \App\Marker::select('lng', 'lat', 'name')->get();
	});
});
