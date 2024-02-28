<?php
// Include the database connection file
require_once("dbConnection.php");

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Get the reference number from the form
    $reference_number = $_POST['reference_number'];

    // Get the updated data from the form
    $date_filed = $_POST['date_filed'];
    $name = $_POST['name'];
    $purpose = $_POST['purpose'];
    $status = $_POST['status'];
    $payment = $_POST['payment'];
    $action = $_POST['action'];

    // Update the data in the database
    $query = "UPDATE users SET date_filed = ?, name = ?, purpose = ?, status = ?, payment = ?, action = ? WHERE reference_number = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ssssssi", $date_filed, $name, $purpose, $status, $payment, $action, $reference_number);
    $stmt->execute();
    $stmt->close();

    // Redirect to the homepage
    header("Location: index.php#completedValidation");
}

// Get the reference number from the URL
$reference_number = $_GET['reference_number'];

// Fetch the data from the database
$query = "SELECT * FROM users WHERE reference_number = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $reference_number);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
    </style>
</head>
<body>
    <h2>Edit Data</h2>
    <form method="post" action="edit.php">
        <input type="text" name="reference_number" value="<?php echo $data['reference_number']; ?>" readonly>
        <label for="date_filed">Date Filed:</label>
        <input type="date" name="date_filed" id="date_filed" value="<?php echo $data['date_filed']; ?>">
        <br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>">
        <br>
        <label for="purpose">Purpose:</label>
        <input type="text" name="purpose" id="purpose" value="<?php echo $data['purpose']; ?>">
        <br>
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="Pending" <?php if ($data['status'] == "Pending") echo "selected"; ?>>Pending</option>
            <option value="Approved" <?php if ($data['status'] == "Approved") echo "selected"; ?>>Approved</option>
            <option value="Rejected" <?php if ($data['status'] == "Rejected") echo "selected"; ?>>Rejected</option>
        </select>
        <br>
        <label for="payment">Payment:</label>
        <select name="payment" id="payment">
            <option value="Unpaid" <?php if ($data['payment'] == "Unpaid") echo "selected"; ?>>Unpaid</option>
            <option value="Paid" <?php if ($data['payment'] == "Paid") echo "selected"; ?>>Paid</option>
        </select>
        <br>
        <label for="action">Action:</label>
        <input type="text" name="action" id="action" value="<?php echo $data['action']; ?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>