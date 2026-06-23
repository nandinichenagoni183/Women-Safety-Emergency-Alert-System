<?php

$conn = new mysqli("localhost", "root", "", "women_safety");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>