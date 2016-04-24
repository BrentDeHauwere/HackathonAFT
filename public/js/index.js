$(document).ready(function(){
	$('.grid').masonry({
	  itemSelector: '.grid-item',
	  columnWidth: 160
	});
});

$(window).scroll(function (event) {
	if($(window).scrollTop() > 150) {
		$(".add-button").addClass("fixed-position");
	} else {
		$(".add-button").removeClass("fixed-position");
	}
});

$(document).on("click", ".add-button", function() {
	$("#modal").show();
});

var map;
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
