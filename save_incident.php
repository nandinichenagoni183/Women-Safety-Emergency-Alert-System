<?php

include 'db.php';

$type = $_POST['incident_type'];

$description = $_POST['description'];

$latitude = $_POST['latitude'];

$longitude = $_POST['longitude'];

$sql =
"INSERT INTO incidents
(incident_type,description,latitude,longitude)
VALUES
('$type','$description','$latitude','$longitude')";

if($conn->query($sql))
{
echo "<h2>Incident Reported Successfully</h2>";
}
else
{
echo "Error";
}

?>