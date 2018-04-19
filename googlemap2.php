<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service</title>
  </head>
  <body>
  <input type="text" name="pickupLatitude" value="21.916201" id="pickupLatitude" class="form-control" required="required">
  <input type="text" name="pickupLongitude" value="95.956001" id="pickupLongitude" class="form-control" required="required">
  <input type="text" name="dropLatitude" value="16.91002" id="dropLatitude" class="form-control" required="required">
  <input type="text" name="dropLongitude" value="96.18497" id="dropLongitude" class="form-control" required="required">
    <input type="button" id="routebtn" value="route" />
<div id="map-canvas"></div>
<style>
html, body, #map-canvas {
    height: 100%;
    width: 100%;
    margin: 0px;
    padding: 0px
}
</style>
<script type='text/javascript'
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBcN2hpqU2MY00KFk3jVtrsLJvrucZBr6I&sensor=false&amp;libraries=places"
        type="text/javascript"></script>
<script>
function mapLocation() {
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;

    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var center = new google.maps.LatLng(21.9162, 95.9560); // myanmar
        var mapOptions = {
            zoom: 7,
            center: center
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        directionsDisplay.setMap(map);
        google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
    }

    function calcRoute() {

		pickupLatitude=document.getElementById('pickupLatitude').value;
		pickupLongitude=document.getElementById('pickupLongitude').value;
		dropLatitude=document.getElementById('dropLatitude').value;
		dropLongitude=document.getElementById('dropLongitude').value;
		var start = new google.maps.LatLng(pickupLatitude, pickupLongitude);
        var end = new google.maps.LatLng(dropLatitude, dropLongitude);

        //var end = new google.maps.LatLng(38.334818, -181.884886);
        //var end = new google.maps.LatLng(37.441883, -122.143019);
        //var end = new google.maps.LatLng(37.441883, -122.143019);
        /*
var startMarker = new google.maps.Marker({
            position: start,
            map: map,
            draggable: true
        });
        var endMarker = new google.maps.Marker({
            position: end,
            map: map,
            draggable: true
        });
*/
        var bounds = new google.maps.LatLngBounds();
        bounds.extend(start);
        bounds.extend(end);
        map.fitBounds(bounds);
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                directionsDisplay.setMap(map);
            } else {
                alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}
mapLocation();
</script>

  </body>
</html>