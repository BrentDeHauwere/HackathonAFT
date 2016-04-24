@extends('layouts.app')

@section('title', 'Marker: ' . $marker->title)

@section('content')
	<div class="jumbotron text-center">
		<h2>{{ $marker->title }}</h2>
		<p>
			<strong>ID:</strong> {{ $marker->id }}<br>
			<strong>Name:</strong> {{ $marker->name }}<br>
			<strong>Address:</strong> {{ $marker->address }}<br>
			<strong>Lat:</strong> {{ $marker->lat }}<br>
			<strong>Lng:</strong> {{ $marker->lng }}<br>
			<strong>Type:</strong> {{ $marker->type }}<br>
			<strong>Title:</strong> {{ $marker->title }}<br>
			<strong>Description:</strong> {{ $marker->description }}<br>
			<strong>Picture:</strong> {{ $marker->picture }}<br>
			<strong>UserID:</strong> {{ $marker->user_id }}
		</p>
	</div>
@stop