@extends('layouts.app')

@section('title', 'Markers')

@section('content')
	@if (session('message'))
		<div class="alert alert-info">{{ session('message') }}</div>
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>id</td>
				<td>name</td>
				<td>address</td>
				<td>lat</td>
				<td>lng</td>
				<td>type</td>
				<td>title</td>
				<td>description</td>
				<td>picture</td>
				<td>user_id</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			@foreach($markers as $key => $value)
				<tr>
					<td>{{ $value->id }}</td>
					<td>{{ $value->name }}</td>
					<td>{{ $value->address }}</td>
					<td>{{ $value->lat }}</td>
					<td>{{ $value->lng }}</td>
					<td>{{ $value->type }}</td>
					<td>{{ $value->title }}</td>
					<td>{{ $value->description }}</td>
					<td>{{ $value->picture }}</td>
					<td>{{ $value->user_id }}</td>
					<td>
						<a class="btn btn-small btn-success" href="{{ "markers/$value->id" }}">Show this marker</a>
						<a class="btn btn-small btn-info" href="{{ "markers/$value->id/edit" }}">Edit this marker</a>
						<form action="{{ "markers/$value->id" }}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="delete">
							<input type="submit" value="Delete the marker" class="btn btn-warning">
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop