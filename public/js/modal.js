/**
 * Created by Dieter on 24/04/2016.
 */

var loc = {
    lat: 50.850619,
    long: 4.356162
};

$(document).ready(function() {
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

});

$(document).on("keypress", "#modal-location-name", function(event) { 
    return event.keyCode != 13;
});

/*function autosize(e) {
    setTimeout(function () {
        $(e.data.loc_path).locationpicker('autosize');
    }, 1000);
}*/