var pos;

var latitudeElement = document.getElementById("latitude");
var longitudeElement = document.getElementById("longitude");

var inputLatitude = document.getElementById("input_latitude");
var inputLongitude = document.getElementById("input_longitude");

window.onload = function(){
    getGeolocation();
}

function initMap() {
    var userPosition = new google.maps.LatLng(pos.lat, pos.lng);
    var mapElement = document.getElementById('map-canvas');
    var mapOptions = {
        center: userPosition,
        zoom: 15,
    };
    map = new google.maps.Map(mapElement,mapOptions);
    var infoWindow = new google.maps.InfoWindow({map: map});
    infoWindow.setPosition(pos);
    infoWindow.setContent("Puedo verte...");
}

function getGeolocation(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(savePosition);
    } else {
        alert("Browser doesn't support Geolocation");
    }
}

function savePosition(position) {
    pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
    };
	latitudeElement.innerHTML += "<span>" + pos.lat + "<span>";
	longitudeElement.innerHTML += "<span>" + pos.lng + "<span>";
	inputLatitude.value = pos.lat;
	inputLongitude.value = pos.lng;
	loadMapScript();
}

function loadMapScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?' +
    '&key=AIzaSyDF9hkLQcXUdwjOzteFU02OzH8QpV5kayU&callback=initMap';
    document.body.appendChild(script);
}