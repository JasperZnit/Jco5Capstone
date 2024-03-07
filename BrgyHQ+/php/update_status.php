<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project";

// Create connection
$conn = new \mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from the AJAX request
$record_id = $_POST['record_id'];
$status = $_POST['status'];

// Prepare and execute SQL update statement
$sql = "UPDATE certificate_applications SET payment_status = ? WHERE application_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $record_id);

if ($stmt->execute()) {
    echo "Payment status updated successfully for record ID: " . $record_id;
} else {
    echo "Error updating payment status: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
