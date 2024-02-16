<?php
// Database connection (Replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capdb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Input Validation (Basic protection against SQL injection)
    if (!isset($_POST['id']) || !ctype_digit($_POST['id'])) {
        echo 'error';
        exit; 
    }

    $stmt = $conn->prepare("DELETE FROM user_records WHERE id = :id");
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();

    echo 'success';
} catch(PDOException $e) {
    echo 'error';
}
?>
