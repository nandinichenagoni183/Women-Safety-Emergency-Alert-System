<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>SOS Emergency Alert</title>

<style>

body{
    font-family:Arial;
    text-align:center;
    margin-top:100px;
}

button{
    background:red;
    color:white;
    font-size:24px;
    padding:20px 40px;
    border:none;
    border-radius:10px;
    cursor:pointer;
}

</style>

</head>

<body>

<h1>Emergency SOS Alert</h1>

<button onclick="getLocation()">
SOS
</button>

<form id="sosForm"
      action="save_sos.php"
      method="POST">

<input type="hidden"
       id="latitude"
       name="latitude">

<input type="hidden"
       id="longitude"
       name="longitude">

</form>

<script>

function getLocation()
{
    if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(
        function(position)
        {
            document.getElementById("latitude").value =
            position.coords.latitude;

            document.getElementById("longitude").value =
            position.coords.longitude;

            document.getElementById("sosForm").submit();
        });
    }
}

</script>

</body>
</html>