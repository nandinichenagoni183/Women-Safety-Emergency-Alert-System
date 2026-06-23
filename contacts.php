<?php
include 'db.php';
?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Emergency Contacts</title>

<style>

body{
    font-family:Arial;
    margin:40px;
}

.container{
    width:500px;
    margin:auto;
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
}

button{
    width:100%;
    padding:12px;
    background:#2196f3;
    color:white;
    border:none;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th,td{
    padding:10px;
}

</style>

</head>

<body>

<div class="container">

<h2>Emergency Contacts</h2>

<form action="save_contact.php" method="POST">

<input
type="text"
name="contact_name"
placeholder="Contact Name"
required>

<input
type="text"
name="contact_phone"
placeholder="Phone Number"
required>

<button type="submit">
Add Contact
</button>

</form>

<table>

<tr>
<th>Name</th>
<th>Phone</th>
</tr>

<?php

$result =
$conn->query(
"SELECT * FROM contacts"
);

while($row = $result->fetch_assoc())
{
?>

<tr>

<td>
<?php echo $row['contact_name']; ?>
</td>

<td>
<?php echo $row['contact_phone']; ?>
</td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>