<!DOCTYPE html>
<html>
<head>
    <title>Nearby Police Stations</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>

    <style>
        body{
            margin:0;
            font-family:Arial;
        }

        h1{
            text-align:center;
            background:#e91e63;
            color:white;
            padding:15px;
            margin:0;
        }

        #map{
            height:90vh;
            width:100%;
        }
    </style>
</head>

<body>

<h1>Nearby Police Stations</h1>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

if(navigator.geolocation){

navigator.geolocation.getCurrentPosition(function(position){

var lat = position.coords.latitude;
var lon = position.coords.longitude;

var map = L.map('map').setView([lat, lon], 14);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
attribution:'© OpenStreetMap'
}).addTo(map);

L.marker([lat, lon])
.addTo(map)
.bindPopup("You are here")
.openPopup();

fetch(`https://overpass-api.de/api/interpreter?data=
[out:json];
(
node["amenity"="police"](around:20000,${lat},${lon});
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

})
.catch(error => {
console.log(error);
});

});
}
else{
alert("Geolocation not supported");
}

</script>

</body>
</html>