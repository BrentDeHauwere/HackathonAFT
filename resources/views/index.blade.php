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
	<a class="profile-button" href="profile"></a>
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
		<p class="post-counter">0</p>
	</section>

	<section class="message-wall grid">
		<article class="wall-post grid-item">
			<h2>The Grand Place</h2>
			<p class="post-message">The Grand Place of Brussels was great! A great place to visit. Such beauty much great! Very wow.</p>
			<footer>
				<img class="like-icon icon" src="svg/like-icon.svg">
				<p class="like-counter">0</p>
				<img class="dislike-icon icon" src="svg/dislike-icon.svg">
				<p class="dislike-counter">0</p>
				<img class="fav-icon icon" src="svg/fav-icon.svg">
				<p class="fav-counter">0</p>
				<p class="location">@Grand Place</p>
				<img class="post-profile-picture" src="img/profielfoto.png">
			</footer>
		</article>
		<article class="wall-post grid-item grid-item--height2">
			<img class="post-img" src="img/11327757204_bd60c8a657_c.jpg">
			<footer>
				<img class="like-icon icon" src="svg/like-icon.svg">
				<p class="like-counter">0</p>
				<img class="dislike-icon icon" src="svg/dislike-icon.svg">
				<p class="dislike-counter">0</p>
				<img class="fav-icon icon" src="svg/fav-icon.svg">
				<p class="fav-counter">0</p>
				<p class="location">@Grand Place</p>
				<img class="post-profile-picture" src="img/profielfoto.png">
			</footer>
		</article>
		<article class="wall-post grid-item">
			<div id="map1" class="map"></div>
			<footer>
				<img class="like-icon icon" src="svg/like-icon.svg">
				<p class="like-counter">0</p>
				<img class="dislike-icon icon" src="svg/dislike-icon.svg">
				<p class="dislike-counter">0</p>
				<img class="fav-icon icon" src="svg/fav-icon.svg">
				<p class="fav-counter">0</p>
				<p class="location">@Grand Place</p>
				<img class="post-profile-picture" src="img/profielfoto.png">
			</footer>
		</article>
		<article class="wall-post grid-item">
			<h2>The Grand Place</h2>
			<p class="post-message">The Grand Place of Brussels was great! A great place to visit. Such beauty much great! Very wow.</p>
			<footer>
				<img class="like-icon icon" src="svg/like-icon.svg">
				<p class="like-counter">0</p>
				<img class="dislike-icon icon" src="svg/dislike-icon.svg">
				<p class="dislike-counter">0</p>
				<img class="fav-icon icon" src="svg/fav-icon.svg">
				<p class="fav-counter">0</p>
				<p class="location">@Grand Place</p>
				<img class="post-profile-picture" src="img/profielfoto.png">
			</footer>
		</article>
		<article class="wall-post grid-item grid-item--height2">
			<img class="post-img" src="img/11327757204_bd60c8a657_c.jpg">
			<footer>
				<img class="like-icon icon" src="svg/like-icon.svg">
				<p class="like-counter">0</p>
				<img class="dislike-icon icon" src="svg/dislike-icon.svg">
				<p class="dislike-counter">0</p>
				<img class="fav-icon icon" src="svg/fav-icon.svg">
				<p class="fav-counter">0</p>
				<p class="location">@Grand Place</p>
				<img class="post-profile-picture" src="img/profielfoto.png">
			</footer>
		</article>
		<article class="wall-post grid-item">
			<div id="map1" class="map"></div>
			<footer>
				<img class="like-icon icon" src="svg/like-icon.svg">
				<p class="like-counter">0</p>
				<img class="dislike-icon icon" src="svg/dislike-icon.svg">
				<p class="dislike-counter">0</p>
				<img class="fav-icon icon" src="svg/fav-icon.svg">
				<p class="fav-counter">0</p>
				<p class="location">@Grand Place</p>
				<img class="post-profile-picture" src="img/profielfoto.png">
			</footer>
		</article>
	</section>

	<section id="modal">
		<form class="new-place-modal">
			<h2>add new place</h2>
			<a href="#" id="modal-close">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="48.8px" height="48.8px" viewBox="0 0 48.8 48.8" style="enable-background:new 0 0 48.8 48.8;" xml:space="preserve">
                        <g>
							<line class="st0" x1="1.1" y1="1.1" x2="49.2" y2="49.2" />
							<line class="st0" x1="1.1" y1="49.2" x2="49.2" y2="1.1" />
						</g>
                    </svg>
			</a>
			<div class="modal-content">
				<div class="col-1">
					<textarea id="modal-message" name="message" placeholder="message"></textarea>
					<div id="modal-image-container">
						<input type="file" id="modal-image" name="image" placeholder="upload picture">
						<div id="modal-image-label">
							<label for="modal-image">
								<br>
								<br>
								<br>
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="512px" height="395.8px" viewBox="0 0 512 395.8" style="enable-background:new 0 0 512 395.8;" xml:space="preserve">
                                        <style type="text/css">
											.st0 {
												fill: #4D606E;
											}
										</style>
									<g>
										<path class="st0" d="M395.1,130.3C390.3,57.7,329.7,0,255.8,0c-73.9,0-134.5,57.7-139.3,130.4C50.4,138.7,0,195,0,262.5
            C0,336,59.8,395.8,133.3,395.8h202.7c5.8,0,10.4-4.7,10.4-10.4c0-5.8-4.7-10.4-10.4-10.4H133.3c-62,0-112.4-50.4-112.4-112.4
            c0-59.7,46.7-108.9,106.3-112.1c5.5-0.3,9.9-4.9,9.9-10.4c0-0.2,0-0.4,0-0.6C137.2,74,190.4,20.9,255.8,20.9
            c65.4,0,118.6,53.1,118.7,118.5c0,0.2,0,0.4,0,0.6c0,5.6,4.4,10.1,9.9,10.4c59.8,3,106.7,52.3,106.7,112.1
            c0,34-15.1,65.8-41.5,87.3c-4.5,3.6-5.2,10.2-1.5,14.7c3.6,4.5,10.2,5.2,14.7,1.5c31.3-25.5,49.2-63.2,49.2-103.5
            C512,194.8,461.4,138.5,395.1,130.3z" />
										<path class="st0" d="M245.4,187.5v133.2c0,5.8,4.7,10.4,10.4,10.4s10.4-4.7,10.4-10.4V187.5c0-5.8-4.7-10.4-10.4-10.4
            S245.4,181.7,245.4,187.5z" />
										<path class="st0" d="M315.5,206.8c2.7,0,5.3-1,7.4-3.1c4.1-4.1,4.1-10.7,0-14.8l-59.7-59.7c-4.1-4.1-10.7-4.1-14.8,0L188.7,189
            c-4.1,4.1-4.1,10.7,0,14.8c4.1,4.1,10.7,4.1,14.8,0l52.3-52.3l52.3,52.3C310.2,205.8,312.9,206.8,315.5,206.8z" />
									</g>
                                    </svg>
								<br>upload picture
							</label>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div id="modal-maps"></div>
					<input type="text" id="modal-location-name" placeholder="search location">
				</div>
			</div>
			<div id="modal-submit">
				<input type="submit" value="add place">
			</div>
			<input type="hidden" name="lat" id="modal-lat">
			<input type="hidden" name="long" id="modal-long">
		</form>
	</section>

	<section id="map-modal">
		<h2>map</h2>
		<a href="#" id="map-modal-close">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="48.8px" height="48.8px" viewBox="0 0 48.8 48.8" style="enable-background:new 0 0 48.8 48.8;" xml:space="preserve">
                    <g>
						<line class="st0" x1="1.1" y1="1.1" x2="49.2" y2="49.2" />
						<line class="st0" x1="1.1" y1="49.2" x2="49.2" y2="1.1" />
					</g>
                </svg>
		</a>
		<input type="text" id="map-modal-location-name">
		<div class="map-modal-content">

		</div>
	</section>
</section>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCHv7f5WI-1gPWnyQXJwNup90GLu3IzELc&callback=initMap"></script>
</body>

</html>