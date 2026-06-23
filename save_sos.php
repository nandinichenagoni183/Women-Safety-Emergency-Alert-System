<?php

include 'db.php';

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$sql = "INSERT INTO sos_alerts(latitude,longitude)
VALUES('$latitude','$longitude')";

if($conn->query($sql))
{
    echo "<h2>SOS Alert Sent Successfully!</h2>";
}
else
{
    echo "Error";
}

?>