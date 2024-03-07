<?php
// Database connection (Replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Input Validation (Basic protection against SQL injection)
    if (!isset($_POST['application_id']) || !ctype_digit($_POST['application_id'])) {
        echo 'error';
        exit; 
    }

    $stmt = $conn->prepare("DELETE FROM certificate_applications WHERE application_id = :application_id");
    $stmt->bindParam(':application_id', $_POST['application_id']);
    $stmt->execute();

    echo 'success';
} catch(PDOException $e) {
    echo 'error';
}
?>
