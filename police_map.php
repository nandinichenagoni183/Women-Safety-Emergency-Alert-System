<!DOCTYPE html>
<html>
<head>
<title>Nearby Police Stations</title>

<link rel="stylesheet"
href="https://unpkg.com/leaflet/dist/leaflet.css"/>

<style>

body{
margin:0;
}

#map{
height:100vh;
width:100%;
}

</style>

</head>

<body>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

var map = L.map('map').setView([17.3850,78.4867],12);

L.tileLayer(
'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
{
attribution:'© OpenStreetMap'
}
).addTo(map);

if(navigator.geolocation){

navigator.geolocation.getCurrentPosition(function(position){

var lat = position.coords.latitude;
var lon = position.coords.longitude;

map.setView([lat,lon],14);

L.marker([lat,lon])
.addTo(map)
.bindPopup("Your Location")
.openPopup();

fetch(`https://overpass-api.de/api/interpreter?data=
[out:json];
(
node["amenity"="police"](around:50000,${lat},${lon});
);
out;`)
.then(response => response.json())
.then(data => {

data.elements.forEach(police => {

L.marker([police.lat, police.lon])
.addTo(map)
.bindPopup(
"<b>Police Station</b><br>" +
(police.tags.name || "Police Station")
);

});

});

});

}

</script>

</body>
</html>