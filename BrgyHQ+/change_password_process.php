<?php
session_start();

// Ensure user is logged in 
if (!isset($_SESSION['user_id'])) {
  header('loginBRGYHQ+/signin.php');  
  exit();
}

// Database connection (replace with your credentials)
$conn = mysqli_connect("localhost", "root", "", "admin_login");

// Get form data
$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];
$confirmPassword = $_POST['confirm_password'];
$userId = $_SESSION['user_id'];

// Basic input validation 
if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
  header('Location: dashboard.php?error=emptyfields');
  exit();
}

// Check if new password and confirmation match
if ($newPassword !== $confirmPassword) {
  header('Location: dashboard.php?error=passwordmismatch');
  exit();
}

// Fetch stored password  from database
$sql = "SELECT password FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $userId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    // Compare current password in plain text 
    if ($currentPassword !== $row['password']) {
         header('Location: dashboard.php?error=wrongcurrent');
         exit();
    }

    // Update password (plain text)
    $sql = "UPDATE users SET password = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "si", $newPassword, $userId);
    mysqli_stmt_execute($stmt);

    // Redirect with success message (add this if needed)
    header('Location: loginBRGYHQ+/index.php?success=passwordchanged'); 
} 

mysqli_close($conn); 
?>