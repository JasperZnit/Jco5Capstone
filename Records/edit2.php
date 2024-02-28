<?php
session_start();
require_once 'dbConnection2.php';

if (isset($_POST['submit'])) {
    // Get the reference number from the form
    $validation_id = $_POST['validation_id'];

    // Get the updated data from the form
    $date_filed = $_POST['date_filed'];
    $name = $_POST['name'];
    $remarks = $_POST['remarks'];
    $validation_status = $_POST['validation_status'];
    $action = $_POST['action'];

    // Update the data in the database
    $query = "UPDATE users SET date_filed = ?, name = ?, remarks = ?, validation_status = ?, action = ? WHERE validation_id = ?";
    $stmt = $mysqli->prepare($query);
    // Note that we use &$date_filed, &$name, etc. to pass the variables by reference
    $stmt->bind_param("sssssi", $date_filed, $name, $remarks, $validation_status, $action, $validation_id);
    $stmt->execute();
    $stmt->close();

    // Redirect to the homepage
    header("Location: index.php#completedRequest");
} else {
    // Get the reference number from the URL
    $validation_id = $_GET['validation_id'];

    // Fetch the data from the database
    $query = "SELECT * FROM users WHERE validation_id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $validation_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
}
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
    <?php if (isset($data)): ?>
        <form method="post" action="edit2.php">
            <input type="hidden" name="validation_id" value="<?php echo $data['validation_id']; ?>">
            <label for="date_filed">Date Filed:</label>
            <input type="date" name="date_filed" id="date_filed" value="<?php echo $data['date_filed']; ?>">
            <br>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>">
            <br>
            <label for="remarks">Remarks:</label>
            <select name="remarks" id="remarks">
                <option value="complete" <?php if ($data['remarks'] == "complete") echo "selected"; ?>>Complete</option>
                <option value="incomplete" <?php if ($data['remarks'] == "incomplete") echo "selected"; ?>>Incomplete</option>
            </select>
            <br>
            <label for="validation_status">Status:</label>
            <select name="validation_status" id="validation_status">
                <option value="validated" <?php if ($data['validation_status'] == "validated") echo "selected"; ?>>Validated</option>
                <option value="non-validated" <?php if ($data['validation_status'] == "non-validated") echo "selected"; ?>>Non-Validated</option>
            </select>
            <br>
            <label for="action">Action:</label>
            <input type="text" name="action" id="action" value="<?php echo $data['action']; ?>">
            <br>
            <input type="submit" name="submit" value="Update">
        </form>
    <?php else: ?>
        <p>No data found.</p>
    <?php endif; ?>
</body>
</html>