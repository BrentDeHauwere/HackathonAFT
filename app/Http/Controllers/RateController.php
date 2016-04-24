<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;

use App\Http\Requests;

class RateController extends Controller
{
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request $request
	 * @param  integer $id
	 * @param  boolean $like
	 * @return Response
	 */
	public function store(Request $request, $id, $like)
	{
		$rate = Rate::where('marker_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first();

		if ($rate == null)
		{
			Rate::insert(['user_id' => Auth::user()->id, 'marker_id' => $id, 'like' => $like]);
		}
		else
		{
			$rate->like = $like;
			$rate->save();
		}
	}

	/**
	 * Remove (inactive) the specified resource from storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public
	function destroy($id)
	{
		$rate = Rate::where('marker_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first();

		if ($rate != null)
		{
			$rate->delete();
		}
	}
}
