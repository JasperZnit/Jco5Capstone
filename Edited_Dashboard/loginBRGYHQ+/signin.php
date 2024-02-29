<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "admin_login");

// Check for POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Authenticate user
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row["password"];

        if ($password === $stored_password) {
            // Password is correct, start a new session
            session_start();
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];

            // Redirect to home page or dashboard
            header("Location: ../dashboard.php");
            exit();
        } else {
            // Incorrect password
            echo "<script>
                   alert('Invalid username or password.');
                   window.location.href = 'index.php'; 
                 </script>";
        }
    } else {
        // User not found
        echo "<script>
                   alert('Invalid username or password.');
                   window.location.href = 'index.php'; 
                 </script>";
    }
}

mysqli_close($conn);
?>