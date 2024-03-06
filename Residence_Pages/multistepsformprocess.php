<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$purpose = $_POST['purpose'];
 $other_purpose = $_POST['other_purpose'];
 $appointment_date = $_POST['appointment_date'];
$payment = $_POST['payment'];
if($purpose == 'Other'){
 $current_purpose =  $other_purpose;
}
else{
  $current_purpose =  $purpose;
}


//  echo $current_purpose;
//  echo $appointment_date;
//  echo $payment; 


 //Insert the data into the database
 $sql = "INSERT INTO certificate (purpose, appointment_date, payment) VALUES ('$purpose', '$appointment_date', '$payment')";

//  if ($conn->query($sql) === TRUE) {
//      echo "New record created successfully";
//  } else {
// echo "Error: " . $sql . "<br>" . $conn->error;
// }
 // Redirect to multistepsform.php
//  header('Location: multistepsform.php');
//  exit;

// Close the database connection
$conn->close();

?>