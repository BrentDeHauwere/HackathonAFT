@extends('layouts.app')

@section('title', 'Create Marker')

@section('content')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/markers" method="post">
		<div class="form-group">
			<label for="name">Name</label>
			<input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}">
		</div>

		<div class="form-group">
			<label for="address">Address</label>
			<input id="address" type="text" name="address" class="form-control" value="{{ old('address') }}">
		</div>

		<div class="form-group">
			<label for="lat">Lat</label>
			<input id="lat" type="number" step="any" name="lat" class="form-control" value="{{ old('lat') }}">
		</div>

		<div class="form-group">
			<label for="lng">Lng</label>
			<input id="lng" type="number" step="any" name="lng" class="form-control" value="{{ old('lng') }}">
		</div>

		<div class="form-group">
			<label for="lng">Type</label>
			<input id="type" type="text" name="type" class="form-control" value="{{ old('type') }}">
		</div>

		<div class="form-group">
			<label for="title">Title</label>
			<input id="title" type="text" name="title" class="form-control" value="{{ old('title') }}">
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<input id="description" type="text" name="description" class="form-control" value="{{ old('description') }}">
		</div>

		<div class="form-group">
			<label for="picture">Picture</label>
			<input id="picture" type="file" name="picture" class="form-control" value="{{ old('picture') }}">
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="submit" value="Create the wall" class="btn btn-primary">
	</form>
@stop