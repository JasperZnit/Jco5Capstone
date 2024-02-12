<?php
// Database connection (Adjust with your credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Fetch data (updated query)
$sql = "SELECT id, client_name, purpose, date, status FROM records_table"; // Include 'date' and 'status' columns
$result = $conn->query($sql);

// Store data in an array for easier use in HTML
$records = []; 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $records[] = $row;
    }
} else {
    echo "0 results"; // You might want to handle this differently in your HTML
}

$conn->close();
?>
