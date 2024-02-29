<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// SQL query to count validated users
$sql = "SELECT COUNT(*) as total_validated_users FROM user_records WHERE payment_status = 'paid'"; // Modified query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $row = $result->fetch_assoc();
 $totalValidatedUsers = $row['total_validated_users']; // Updated variable name

 // Calculate percentage (assuming some maximum value)
 $maxUsers = 1000; // Example: Adjust as needed
 $validatedPercentage = ($totalValidatedUsers / $maxUsers) * 100; 
} else {
 $totalValidatedUsers = 0; // Handle the case where there are no validated users
 $validatedPercentage = 0;
}

$conn->close();
?>
