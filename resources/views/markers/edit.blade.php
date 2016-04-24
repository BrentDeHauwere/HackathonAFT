@extends('layouts.app')

@section('title', 'Edit marker: ' . $marker->title)

@section('content')
	<h1>Edit Marker: {{ $marker->name }}</h1>

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{ "/markers/$marker->id" }}" method="post">
		<div class="form-group">
			<label for="name">Name</label>
			<input id="name" type="text" name="name" class="form-control" value="{{ $marker->name }}">
		</div>

		<div class="form-group">
			<label for="address">Address</label>
			<input id="address" type="text" name="address" class="form-control" value="{{ $marker->address }}">
		</div>

		<div class="form-group">
			<label for="lat">Lat</label>
			<input id="lat" type="number"step="any" name="lat" class="form-control" value="{{ $marker->lat }}">
		</div>

		<div class="form-group">
			<label for="lng">Lng</label>
			<input id="lng" type="number"step="any" name="lng" class="form-control" value="{{ $marker->lng }}">
		</div>

		<div class="form-group">
			<label for="type">Type</label>
			<input id="type" type="text" name="type" class="form-control" value="{{ $marker->type }}">
		</div>

		<div class="form-group">
			<label for="title">Title</label>
			<input id="title" type="text" name="title" class="form-control" value="{{ $marker->title }}">
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<input id="description" type="text" name="description" class="form-control" value="{{ $marker->description }}">
		</div>

		<div class="form-group">
			<label for="picture">Picture</label>
			<input id="picture" type="file" name="picture" class="form-control" value="{{ $marker->picture }}">
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="hidden" name="_method" value="put">

		<input type="submit" value="Edit the marker" class="btn btn-primary">
	</form>
@stop