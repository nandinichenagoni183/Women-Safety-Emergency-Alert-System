<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,phone,password)
VALUES('$name','$email','$phone','$password')";

if($conn->query($sql) === TRUE)
{
    echo "<h2>Registration Successful!</h2>";
    echo "<a href='index.html'>Click Here to Login</a>";
}
else
{
    echo "Error: " . $conn->error;
}

$conn->close();

?>