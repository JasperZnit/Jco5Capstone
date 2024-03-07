<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query Data
$sql = "SELECT application_id, name, email, purpose, appointment_datetime, payment_status, payment_method FROM certificate_applications"; // Include 'address'
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
