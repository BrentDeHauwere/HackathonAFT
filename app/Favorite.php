<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Get the user that owns the favorite.
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get the marker that owns the favorite.
	 */
	public function marker()
	{
		return $this->belongsTo('App\Marker');
	}
}
