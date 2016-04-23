<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Get the user that owns the marker.
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get the rates from the marker.
	 */
	public function rates()
	{
		return $this->hasMany('App\Rate');
	}

	/**
	 * Get the favorites from the marker.
	 */
	public function favorites()
	{
		return $this->hasMany('App\Favorite');
	}
}
