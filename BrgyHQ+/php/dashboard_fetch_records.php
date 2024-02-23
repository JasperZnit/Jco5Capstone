<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query Data
$sql = "SELECT id, username, email FROM users"; // Include 'address'
$result = $conn->query($sql);

$users = array();
if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($users);
