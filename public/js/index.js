var loc = {
		lat: 50.850619,
		long: 4.356162
	},
	map;

$(document).ready(function(){
	$('.grid').masonry({
	  itemSelector: '.grid-item',
	  columnWidth: 160,
		gutter: 5
	});

	$.getJSON('map_points.json', function(data) {
		var map = new google.maps.Map(document.getElementById("map_canvas"), {
			center: new google.maps.LatLng(loc.lat, loc.long),
				zoom: 5,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

		$.each(data.points, function (i, value) {
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(value.lat, value.lon),
				map: map,
				title: "text " + value.lon
			});
		});
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

	$("#map-modal .map-modal-content").locationpicker({
		location: {
			latitude: loc.lat,
			longitude: loc.long,
			enableReverseGeocode: false
		},
		radius: 0,
		zoom: 14,
		onchanged: function(currentLocation, radius, isMarkerDropped) {

		},
		inputBinding: {
			locationNameInput: $('#map-modal-location-name')
		},
		enableAutocomplete: true
	});

	$("#map-modal").hide();
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
		$("#map-modal .map-modal-content").locationpicker('autosize');
	}, 1000);
});

$(document).on("click", "#map-modal-close", function() {
	$("#map-modal").fadeOut(500);
});

$(document).on("keypress", "#modal-location-name", function(event) {
	return event.keyCode != 13;
});

function initMap() {
	var myLatLng = {lat: -25.363, lng: 131.044};
	map = new google.maps.Map(document.getElementById('map1'), {
		center: myLatLng,
		zoom: 8
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Hello World!'
	});
}

/* FUNCTIONS */

function autosize(e) {
	setTimeout(function () {
		$(e.data.loc_path).locationpicker('autosize');
	}, 1000);
}
