var loc = {
		lat: 50.850619,
		long: 4.356162
	},
	map,
	markers;

$(document).ready(function() {
	$('.grid').masonry({
	  itemSelector: '.grid-item',
	  columnWidth: 160,
		gutter: 5
	});

	$("#modal-maps").locationpicker({
		location: {
			latitude: loc.lat,
			longitude: loc.long,
			enableReverseGeocode: false
		},
		radius: 0,
		zoom: 14,
		onchanged: function(currentLocation, radius, isMarkerDropped) {
			$("#modal-lat").attr("value", loc.lat);
			$("#modal-long").attr("value", loc.long);
		},
		inputBinding: {
			locationNameInput: $('#modal-location-name')
		},
		enableAutocomplete: true
	});

	$("#map-modal").hide();

	setInterval(function() {
		$('.grid').masonry();
	}, 2000);
});

$.getJSON('coordinates', function(data) {
	markers = data;
});

/* EVENT LISTENERS */

$(window).scroll(function (event) {
	if($(window).scrollTop() > 150) {
		$(".add-button").addClass("fixed-position");
	} else {
		$(".add-button").removeClass("fixed-position");
	}
});

$(document).on("click", ".add-button", function() {
	$("#modal").fadeIn(500);
	setTimeout(function () {
		$("#modal-maps").locationpicker('autosize');
	}, 1000);
});

$(document).on("click", "#modal-close", function() {
	$("#modal").fadeOut(500);
});

$(document).on("click", ".map-button", function() {
	$("#map-modal").fadeIn(500);
	setTimeout(function () {
		var location = {
			latitude: loc.lat,
			longitude: loc.long,
			enableReverseGeocode: false
		}

		if($("#map-modal").attr("lat") && $("#map-modal").attr("long")) {
			location.latitude = $("#map-modal").attr("lat");
			location.longitude = $("#map-modal").attr("long");
		}

		$("#map-modal .map-modal-content").locationpicker({
			location: location,
			radius: 0,
			zoom: 18,
			onchanged: function(currentLocation, radius, isMarkerDropped) {

			},
			inputBinding: {
				locationNameInput: $('#map-modal-location-name')
			},
			enableAutocomplete: true
		});

		if(markers !== undefined) {
			var map = $("#map-modal .map-modal-content").locationpicker('map').map;
			console.log(markers);
			$.each(markers, function (i, value) {
				var marker = new google.maps.Marker({
						position: new google.maps.LatLng(value.lat, value.lng),
						map: map,
						title: value.name
					}),
					infowindow = new google.maps.InfoWindow({
						content: "<h4>" + value.name + "</h4>"
					});

				marker.addListener('click', function() {
					infowindow.open(map, marker);
				});
			});
		}

		$("#map-modal .map-modal-content").locationpicker('autosize');
	}, 1000);
});

$(document).on("click", ".wall-post p.location", function() {
	$("#map-modal").attr("lat", $(this).parent().parent().attr("lat"));
	$("#map-modal").attr("long", $(this).parent().parent().attr("long"));
	$(".map-button").click();
});

$(document).on("click", "#map-modal-close", function() {
	$("#map-modal").fadeOut(500);
});

$(document).on("keypress", "#modal-location-name", function(event) {
	return event.keyCode != 13;
});

/* FUNCTIONS */

function autosize(e) {
	setTimeout(function () {
		$(e.data.loc_path).locationpicker('autosize');
	}, 1000);
}
