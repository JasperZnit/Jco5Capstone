<?php

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "my_project";

$conn = new mysqli($local, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}