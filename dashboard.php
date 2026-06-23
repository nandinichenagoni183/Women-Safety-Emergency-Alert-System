<?php
$conn = new mysqli("localhost","root","","women_safety");

$users = $conn->query("SELECT * FROM users")->num_rows;
$contacts = $conn->query("SELECT * FROM contacts")->num_rows;
$incidents = $conn->query("SELECT * FROM incidents")->num_rows;
$sos = $conn->query("SELECT * FROM sos_alerts")->num_rows;
?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
margin:0;
}

.header{
background:#e91e63;
color:white;
padding:20px;
text-align:center;
}

.cards{
display:flex;
justify-content:center;
gap:30px;
margin-top:40px;
flex-wrap:wrap;
}

.card{
width:250px;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0px 0px 10px #ccc;
text-align:center;
}

.card h2{
color:#e91e63;
}

.menu{
margin-top:40px;
text-align:center;
}

.menu a{
display:inline-block;
padding:12px 25px;
background:#2196F3;
color:white;
text-decoration:none;
margin:10px;
border-radius:5px;
}

</style>

</head>

<body>

<div class="header">
<h1>Women Safety Dashboard</h1>
</div>

<div class="cards">

<div class="card">
<h2><?php echo $users; ?></h2>
<p>Total Users</p>
</div>

<div class="card">
<h2><?php echo $contacts; ?></h2>
<p>Emergency Contacts</p>
</div>

<div class="card">
<h2><?php echo $incidents; ?></h2>
<p>Reported Incidents</p>
</div>

<div class="card">
<h2><?php echo $sos; ?></h2>
<p>SOS Alerts</p>
</div>

</div>

<div class="menu">

<a href="contacts.php">
Emergency Contacts
</a>

<a href="report_incident.php">
Report Incident
</a>

<a href="view_incidents.php">
Incident Map
</a>

<a href="police_map.php">
Nearby Police
</a>

<a href="sos.php">
SOS Alert
</a>

</div>

</body>
</html>