<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Http\Request;

use App\Http\Requests;

class FavoriteController extends Controller
{
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request $request
	 * @param  integer $id
	 * @return Response
	 */
	public function store(Request $request, $id)
	{
		$favorite = Favorite::where('marker_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first();
		
		if ($favorite == null)
		{
			Rate::insert(['user_id' => Auth::user()->id, 'marker_id' => $id]);
		}
		else
		{
			$favorite->delete();
		}

		return true;
	}
}
