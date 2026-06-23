<?php

include 'db.php';

$name = $_POST['contact_name'];
$phone = $_POST['contact_phone'];

$sql =
"INSERT INTO contacts
(contact_name,contact_phone)
VALUES
('$name','$phone')";

if($conn->query($sql))
{
    header("Location: contacts.php");
}
else
{
    echo "Error";
}

?>