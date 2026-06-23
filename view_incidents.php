<?php
include 'db.php';

$result = $conn->query("SELECT * FROM incidents");
?>

<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Safety Map</title>

<link rel="stylesheet"
href="https://unpkg.com/leaflet/dist/leaflet.css"/>

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

<h1>Women Safety Incident Map</h1>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

var map = L.map('map').setView([20.5937,78.9629],5);

if (navigator.geolocation) {

navigator.geolocation.getCurrentPosition(function(position) {

    var userLat = position.coords.latitude;
    var userLon = position.coords.longitude;

    L.marker([userLat, userLon])

    .addTo(map)

    .bindPopup("📍 Your Current Location")

    .openPopup();

    map.setView([userLat, userLon], 12);

});

}

L.tileLayer(
'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
{
attribution:'© OpenStreetMap'
}
).addTo(map);

<?php

while($row=$result->fetch_assoc())
{
?>

L.marker([
<?php echo $row['latitude']; ?>,
<?php echo $row['longitude']; ?>
])

.addTo(map)

.bindPopup(
"<b><?php echo $row['incident_type']; ?></b><br><?php echo $row['description']; ?>"
);

<?php
}
?>

</script>

</body>
</html>