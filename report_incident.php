<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Report Incident</title>

<style>

body{
    font-family:Arial;
    background:#f5f5f5;
}

.container{
    width:600px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
}

h2{
    text-align:center;
}

input,textarea,select{
    width:100%;
    padding:10px;
    margin:10px 0;
}

button{
    width:100%;
    padding:12px;
    background:red;
    color:white;
    border:none;
}

</style>
</head>

<body>

<div class="container">

<h2>Report Incident</h2>

<form
id="incidentForm"
action="save_incident.php"
method="POST">

<select
name="incident_type"
required>

<option value="">
Select Incident Type
</option>

<option>Harassment</option>

<option>Stalking</option>

<option>Domestic Violence</option>

<option>Kidnapping Attempt</option>

<option>Other</option>

</select>

<textarea
name="description"
placeholder="Describe Incident"
required>
</textarea>

<input
type="hidden"
name="latitude"
id="latitude">

<input
type="hidden"
name="longitude"
id="longitude">

<button
type="button"
onclick="getLocation()">

Report Incident

</button>

</form>

</div>

<script>

function getLocation()
{
navigator.geolocation.getCurrentPosition(
function(position)
{
document.getElementById("latitude").value =
position.coords.latitude;

document.getElementById("longitude").value =
position.coords.longitude;

document.getElementById("incidentForm").submit();
});
}

</script>

</body>
</html>