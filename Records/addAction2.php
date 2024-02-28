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
require_once("dbConnection2.php");

if (isset($_POST['submit'])) {
    $validation_id = $_POST['validation_id'];
    $date_filed = $_POST['date_filed'];
    $name = $_POST['name'];
    $remarks = $_POST['remarks'];
    $validation_status = $_POST['validation_status'];
    $action = $_POST['action'];
		
	// Check for empty fields
	if (empty($validation_id) || empty($date_filed) || empty($name) || empty($remarks) || empty($validation_status)|| empty($action)) {
		if (empty($validation_id)) {
			echo "<font color='red'>Validation Id field is empty.</font><br/>";
		}
		
		if (empty($date_filed)) {
			echo "<font color='red'>Date Filed field is empty.</font><br/>";
		}
		
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($remarks)) {
			echo "<font color='red'>Remarks field is empty.</font><br/>";
		}
		
		if (empty($validation_status)) {
			echo "<font color='red'>Status field is empty.</font><br/>";
		}
		if (empty($action)) {
			echo "<font color='red'>Action field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
        $result = mysqli_query($mysqli, "INSERT IGNORE INTO users (`validation_id`,`date_filed`, `name`,`remarks`,`validation_status`,`action`) VALUES ('$validation_id', '$date_filed', '$name','$remarks','$validation_status','$action')");

        // Display success message
         echo "<p><font color='green'>Data added successfully!</p>";
         echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>