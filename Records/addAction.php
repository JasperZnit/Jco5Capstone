<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
    $reference_number = $_POST['reference_number'];
    $date_filed = $_POST['date_filed'];
    $name = $_POST['name'];
    $purpose = $_POST['purpose'];
    $status = $_POST['status'];
    $payment = $_POST['payment'];
    $action = $_POST['action'];
		
	// Check for empty fields
	if (empty($reference_number) || empty($date_filed) || empty($name) || empty($purpose) || empty($status)|| empty($payment) || empty($action)) {
		if (empty($reference_number)) {
			echo "<font color='red'>Reference Number field is empty.</font><br/>";
		}
		
		if (empty($date_filed)) {
			echo "<font color='red'>Date Filed field is empty.</font><br/>";
		}
		
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($purpose)) {
			echo "<font color='red'>Purpose field is empty.</font><br/>";
		}
		
		if (empty($status)) {
			echo "<font color='red'>Status field is empty.</font><br/>";
		}
		
		if (empty($payment)) {
			echo "<font color='red'>Payment field is empty.</font><br/>";
		}
		if (empty($action)) {
			echo "<font color='red'>Action field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT IGNORE INTO users (`reference_number`,`date_filed`, `name`,`purpose`,`status`,`payment`,`action`) VALUES ('$reference_number', '$date_filed', '$name','$purpose','$status','$payment','$action')");

        // Display success message
         echo "<p><font color='green'>Data added successfully!</p>";
         echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>

