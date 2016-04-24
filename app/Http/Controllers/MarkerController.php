<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Marker;
use App\Rate;
use App\Favorite;
use App\Http\Requests;

use Auth;

class MarkerController extends Controller
{
	/**
	 * Show an overview of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$markers = Marker::all();

		foreach ($markers as $marker)
		{
			$marker->like = Rate::where('marker_id', '=', $marker->id)->where('like', '=', true)->count();
			$marker->dislike = Rate::where('marker_id', '=', $marker->id)->where('like', '=', false)->count();
			$marker->favorite = $marker->favorites()->count();

			$marker->likeUser = Rate::where('marker_id', '=', $marker->id)->where('user_id', '=', Auth::user()->id)->where('like', '=', true)->count() == 1;
			$marker->dislikeUser = Rate::where('marker_id', '=', $marker->id)->where('user_id', '=', Auth::user()->id)->where('like', '=', false)->count() == 1;
			$marker->favoriteUser = Favorite::where('marker_id', '=', $marker->id)->where('user_id', '=', Auth::user()->id)->count() == 1;
		}
		
		return View::make('markers.index')
			->with('markers', $markers);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('markers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		// Server-side validation
		$this->validate($request, [
			'lat'			=> 'required|numeric',
			'lng'			=> 'required|numeric',
			'title'			=> 'required',
			'picture'		=> 'url',
		]);

		$marker = new Marker;
		$marker->name = $request->input('name');
		$marker->address = $request->input('address');
		$marker->lat = $request->input('lat');
		$marker->lng = $request->input('lng');
		$marker->type = $request->input('type');
		$marker->title = $request->input('title');
		$marker->description = $request->input('description');
		$marker->user_id = Auth::id();
		$marker->save();

		if ($request->hasFile('picture'))
		{
			$file = $request->file('picture');
			$destinationPath = 'uploads';
			$extension = $file->getClientOriginalExtension();
			$fileName = $marker->id . '.' . $extension;
			$upload_success = $file->move($destinationPath, $fileName);

			if ($upload_success) {
				return Redirect::to('markers')->with('message', 'Image uploaded successfully');
			}
		}

		$request->session()->flash('message', 'Successfully created marker.');

		return Redirect::to('markers');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public
	function show($id)
	{
		$marker = Marker::find($id);

		$marker->like = Rate::where('marker_id', '=', $marker->id)->where('like', '=', true)->count();
		$marker->dislike = Rate::where('marker_id', '=', $marker->id)->where('like', '=', false)->count();
		$marker->favorite = $marker->favorites()->count();

		$marker->likeUser = Rate::where('marker_id', '=', $marker->id)->where('user_id', '=', Auth::user()->id)->where('like', '=', true)->count() == 1;
		$marker->dislikeUser = Rate::where('marker_id', '=', $marker->id)->where('user_id', '=', Auth::user()->id)->where('like', '=', false)->count() == 1;
		$marker->favoriteUser = Favorite::where('marker_id', '=', $marker->id)->where('user_id', '=', Auth::user()->id)->count() == 1;

		return View::make('markers.show')
			->with('marker', $marker);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public
	function edit($id)
	{
		$marker = Marker::find($id);

		if ($marker->user_id != Auth::user()->id)
			abort(401, 'Unauthorized action.');

		return View::make('markers.edit')
			->with('marker', $marker);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request $request
	 * @param  int $id
	 * @return Response
	 */
	public
	function update(Request $request, $id)
	{
		$marker = Marker::find($id);

		if ($marker->user_id != Auth::user()->id)
			abort(401, 'Unauthorized action.');

		// Server-side validation
		$this->validate($request, [
			'name' 			=> 'required',
			'address'    	=> 'required',
			'lat'			=> 'required|numeric',
			'lng'			=> 'required|numeric',
			'type'			=> 'required',
			'title'			=> 'required',
			'picture'		=> 'image',
		]);

		$marker = Marker::find($id);
		$marker->name = $request->input('name');
		$marker->address = $request->input('address');
		$marker->lat = $request->input('lat');
		$marker->lng = $request->input('lng');
		$marker->type = $request->input('type');
		$marker->title = $request->input('title');
		$marker->description = $request->input('description');
		$marker->picture = $request->input('picture');
		$marker->save();

		$request->session()->flash('message', 'Successfully updated marker.');
		return Redirect::to('markers');
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
		$marker = Marker::find($id);

		if ($marker->user_id != Auth::user()->id)
			abort(401, 'Unauthorized action.');

		$marker->delete();

		Session::flash('message', 'Successfully deleted the marker.');

		return Redirect::to('markers');
	}
}
