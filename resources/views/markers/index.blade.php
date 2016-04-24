<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta lang="EN">
		<meta name="author" content="Sam Castaigne">
		<meta name="author" content="Dieter Holvoet">
		<meta name="author" content="Sammy Sadati">
		<meta name="author" content="Brent De Hauwere">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Ineffable Brussels</title>

		<link href="css/index.css" rel="stylesheet" type="text/css">
		<link href="css/modal.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700,300" rel="stylesheet" type="text/css">

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCHv7f5WI-1gPWnyQXJwNup90GLu3IzELc"></script>
		<script type="text/javascript" src="js/Library/jquery.min.js"></script>
		<script type="text/javascript" src="js/Library/masonry.pkgd.min.js"></script>
		<script type="text/javascript" src="js/Library/locationpicker.jquery.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</head>

	<body>

		<header>
			<img class="logo" src="svg/logo-zwart.svg">
		</header>

		<section class="menu-buttons">
			<a href="/logout" class="logOut">log out</a>
			<a class="profile-button" href="/profile"></a>
			<button class="map-button"></button>
		</section>

		<section class="main-content">
			<button class="add-button">add place</button>

			<section class="info-balk">
				<p>sort by: </p>
				<select>
					<option value="most-recent">most recent</option>
					<option value="most-popular">most popular</option>
				</select>
				<p class="post-counter">{{ count($markers) }} posts</p>
			</section>

			<section class="message-wall grid">
				@foreach($markers as $key => $value)
					<article class="wall-post grid-item" lat="{{ $value->lat }}" long="{{ $value->lng }}">
						<h2>{{ $value->name  }}</h2>
						<p class="post-message">{{ $value->description }}</p>
						<img class="post-img" src="{{ $value->picture }}">
						<footer>
							<img class="like-icon icon" src="svg/like-icon.svg">
							<p class="like-counter">{{ $value->like }}</p>
							<img class="dislike-icon icon" src="svg/dislike-icon.svg">
							<p class="dislike-counter">{{ $value->dislike }}</p>
							<img class="fav-icon icon" src="svg/fav-icon.svg">
							<p class="fav-counter">{{ $value->favorite }}</p>
							<p class="location">{{ '@' . $value->type }}</p>
							<img class="post-profile-picture" src="img/profielfoto.png">
						</footer>
					</article>
				@endforeach
			</section>

			<section id="modal">
				<form class="new-place-modal" method="post" action="/markers">
					<h2>add new place</h2>
					<a href="#" id="modal-close">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="48.8px" height="48.8px" viewbox="0 0 48.8 48.8" style="enable-background:new 0 0 48.8 48.8;" xml:space="preserve">
                        <g>
							<line class="st0" x1="1.1" y1="1.1" x2="49.2" y2="49.2" />
							<line class="st0" x1="1.1" y1="49.2" x2="49.2" y2="1.1" />
						</g>
                    </svg>
					</a>
					<div class="modal-content">
						<div class="col-1">
							<input id="modal-title" type="text" name="title" placeholder="title*">
							<textarea id="modal-message" name="description" placeholder="description"></textarea>
							<input id="modal-url" type="text" name="picture" placeholder="put image URL here">
						</div>
						<div class="col-2">
							<div id="modal-maps"></div>
							<input type="text" id="modal-location-name" placeholder="search location*">
						</div>
					</div>
					<div id="modal-submit">
						<input type="submit" value="add place">
					</div>
					<input type="hidden" name="lat" id="modal-lat">
					<input type="hidden" name="lng" id="modal-long">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</section>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCHv7f5WI-1gPWnyQXJwNup90GLu3IzELc&callback=initMap"></script>
	</body>

</html>