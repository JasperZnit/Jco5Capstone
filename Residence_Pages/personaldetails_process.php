<?php

// Establish database connection
$db_host = "localhost";
$db_username = "root";
$db_password = ""; // Replace with your actual password
$db_name = "my_project";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate form data (add appropriate validation as needed)
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $middlename = mysqli_real_escape_string($conn, $_POST["middlename"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $bdate = mysqli_real_escape_string($conn, $_POST["bdate"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $bplace = mysqli_real_escape_string($conn, $_POST["bplace"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $civilstatus = mysqli_real_escape_string($conn, $_POST["civilstatus"]);
    $spousefname = mysqli_real_escape_string($conn, $_POST["spousefname"]);
    $spousemidname = mysqli_real_escape_string($conn, $_POST["spousemidname"]);
    $spouselname = mysqli_real_escape_string($conn, $_POST["spouselname"]);
    $street = mysqli_real_escape_string($conn, $_POST["street"]);
    $barangay = mysqli_real_escape_string($conn, $_POST["barangay"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $zip = mysqli_real_escape_string($conn, $_POST["zip"]);
    $cellnum = mysqli_real_escape_string($conn, $_POST["cellnum"]);
    $telnum = mysqli_real_escape_string($conn, $_POST["telnum"]);
    $primEmail = mysqli_real_escape_string($conn, $_POST["primeEmail"]);
    $secEmail = mysqli_real_escape_string($conn, $_POST["secEmail"]);
    $employmentStatus = mysqli_real_escape_string($conn, $_POST["employmentStatus"]);

    // Prepare and execute SQL statement
    $sql = "INSERT INTO personal_details (
        firstname, 
        middlename, 
        lastname, 
        bdate, 
        age,
        bplace, 
        gender,  
        civilStatus, 
        spousefname, 
        spousemidname, 
        spouselname, 
        street, 
        barangay, 
        city, 
        country, 
        zip, 
        cellnum, 
        telnum, 
        primEmail, 
        secEmail, 
        employmentStatus
        ) VALUES (
            '$firstname', 
            '$middlename', 
            '$lastname',
            '$bdate',
            '$age',
            '$bplace',
            '$gender',
            '$civilstatus',
            '$spousefname',
            '$spousemidname',
            '$spouselname',
            '$street',
            '$barangay',
            '$city',
            '$country',
            '$zip',
            '$cellnum',
            '$telnum',
            '$primEmail',
            '$secEmail',
            '$employmentStatus'
        )";

    if ($conn->query($sql) === TRUE) {
        // Data stored successfully
        echo "New record created successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}

?>

<html>

<head>
    <title>Personal Details Form</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <div class="row mx-auto p-4">
                <div class="col-2">
                    <label>Given Name</label>
                </div>
                <div class="col-10">
                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-2 col-form-label">First name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="John">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="middlename" class="col-sm-2 col-form-label">Middle name (optional)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="middlename" name="middlename"
                                placeholder="Smith">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-2 col-form-label">Last name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>