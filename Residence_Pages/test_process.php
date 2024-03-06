<?php

// Establish database connection
$db_host = "localhost";
$db_username = "your_username";
$db_password = "security";
$db_name = "my_project";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate form data (add appropriate validation as needed)
    $bdate = mysqli_real_escape_string($conn, $_POST["bdate"]);
    $bplace = mysqli_real_escape_string($conn, $_POST["bplace"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);

    // Prepare and execute SQL statement
    $sql = "INSERT INTO personal_details (birth_date, birth_place, gender) VALUES ('$bdate', '$bplace', '$gender')";

    if ($conn->query($sql) === TRUE) {
        // Data stored successfully
        echo "Birth details added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}

?>

<html>

<head>
    <title>Birth Details Form</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php // Your birth details form HTML goes here  ?>
    </form>

</body>

</html>