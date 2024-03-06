<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process signup form data (if submitted)
    if (isset($_POST['fullname'], $_POST['email'], $_POST['password'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hash the password using bcrypt
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare and execute SQL statement
        $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $fullname, $email, $hashed_password);
        $stmt->execute();

        // Handle successful signup
        if ($stmt->affected_rows > 0) {
            ?>
            <script>
                alert('Sign up successful! Please log in.');
                window.location.href = 'index.php';
            </script>
            <?php

        } else {
            // Handle signup error
            echo "Signup failed. Please try again.";
        }

    }

    // Close the database connection
    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
