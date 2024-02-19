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

    // Process login form data (if submitted)
    if (isset($_POST['email'], $_POST['loginpassword'])) {
        $email = $_POST['email'];
        $password = $_POST['loginpassword'];

        // Fetch user data by email from database
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists and compare password hashes
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['id'] = $id;
                $_SESSION['fullname'] = $fullname;
                // Handle successful login (e.g., redirect, start session)
                header("Location: home.php");
                exit;
            } else {
                // Handle failed login due to incorrect password
                echo "Invalid email or password. Please try again.";
            }
        } else {
            // Handle failed login due to non-existent user
            echo "Invalid email or password. Please try again.";
        }
    }

    // Close the database connection
    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
