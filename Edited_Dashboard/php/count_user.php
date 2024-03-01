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

// SQL query to count users
$sql = "SELECT COUNT(*) as total_users FROM user_records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $totalUsers = $row['total_users'];

  // Calculate percentage (assuming some maximum value)
  $maxUsers = 1000; // Example: Adjust as needed
  $percentage = ($totalUsers / $maxUsers) * 100; 
} else {
  $totalUsers = 0; // Handle the case where there are no users
  $percentage = 0;
}

$conn->close();
?>
