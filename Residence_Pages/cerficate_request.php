<?php
session_start();

// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate Step 1: Purpose
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['purpose']) || ($_POST['purpose'] === 'Other' && empty($_POST['other_purpose']))) {
        $_SESSION['error'] = 'Please fill out all required fields in Step 1.';
        header('Location: /step1.php');
        exit;
    }

    // Validate Step 2: Appointment
    if (empty($_POST['appointment_datetime'])) {
        $_SESSION['error'] = 'Please select an appointment date and time.';
        header('Location: /step2.php');
        exit;
    }

    // Validate Step 3: Payment
    if (empty($_POST['payment'])) {
        $_SESSION['error'] = 'Please select a payment method.';
        header('Location: /step3.php');
        exit;
    }

    // Prepare SQL statement
    $sql = "INSERT INTO certificate_applications (name, email, purpose, appointment_datetime, payment_method, amount, other_purpose) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $name = $_POST['name'];
    $email = $_POST['email'];
    $purpose = $_POST['purpose'];
    $appointment_datetime = $_POST['appointment_datetime'];
    $payment_method = $_POST['payment'];
    $amount = 75.00;
    $other_purpose = isset($_POST['other_purpose']) ? $_POST['other_purpose'] : null;
    $stmt->bind_param("sssssss", $name, $email, $purpose, $appointment_datetime, $payment_method, $amount, $other_purpose);

    // Execute SQL statement
    if ($stmt->execute()) {
        $_SESSION['success'] = 'Your application has been submitted successfully.';
        echo '<script>alert("Your application has been submitted successfully."); window.location.href = "multistepsform.php";</script>';
        exit;
    } else {
        $_SESSION['error'] = 'An error occurred while submitting your application. Please try again later.';
        echo '<script>alert("An error occurred while submitting your application. Please try again later."); window.location.href = "multistepsform.php";</script>';
        exit;
    }


    $stmt->close();
    $conn->close();
}