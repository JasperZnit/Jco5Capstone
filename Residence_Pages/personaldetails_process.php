<?php
// Connect to the database
$host = 'localhost';
$db   = 'my_project';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Gather form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$bdate = $_POST['bdate'];
$age = $_POST['age'];
$bplace = $_POST['bplace'];
$gender = $_POST['gender'];
$civilstatus = $_POST['civilstatus'];
$spousefname = $_POST['spousefname'];
$spousemidname = $_POST['spousemidname'];
$spouselname = $_POST['spouselname'];
$street = $_POST['street'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$cellnum = $_POST['cellnum'];
$telnum = $_POST['telnum'];
$primeEmail = $_POST['primeEmail'];
$secEmail = $_POST['secEmail'];
$empStat = $_POST['empStat'];
$prime_ID_Type = $_POST['prime_ID_Type'];
$prime_ID_Photo = $_FILES['prime_ID_Photo']['name'];
$second_ID_Type = $_POST['second_ID_Type'];
$second_ID_Photo = $_FILES['second_ID_Photo']['name'];

// Function to handle image uploading
function uploadImage($file, $target_dir) {
    $target_file = $target_dir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file is an actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $file["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    if (!file_exists('uploads/prime_ID_Photos/')) {
        mkdir('uploads/prime_ID_Photos/', 0777, true);
    }
    if (!file_exists('uploads/second_ID_Photos/')) {
        mkdir('uploads/second_ID_Photos/', 0777, true);
    }
}

// Insert data into the database
$target_dir_prime = "uploads/prime_ID_Photos/";
$target_file_prime = $target_dir_prime . basename($_FILES["prime_ID_Photo"]["name"]);
uploadImage($_FILES["prime_ID_Photo"], $target_dir_prime);

$target_dir_second = "uploads/second_ID_Photos/";
$target_file_second = $target_dir_second . basename($_FILES["second_ID_Photo"]["name"]);
uploadImage($_FILES["second_ID_Photo"], $target_dir_second);

$sql = "INSERT INTO personal_details (firstname, middlename, lastname, bdate, age, bplace, gender, civilstatus, spousefname, spousemidname, spouselname, street, barangay, city, country, zip, cellnum, telnum, primeEmail, secEmail, empStat, prime_ID_Type, prime_ID_Photo, second_ID_Type, second_ID_Photo)
VALUES ('$firstname', '$middlename', '$lastname', '$bdate', '$age', '$bplace', '$gender', '$civilstatus', '$spousefname', '$spousemidname', '$spouselname', '$street', '$barangay', '$city', '$country', '$zip', '$cellnum', '$telnum', '$primeEmail', '$secEmail', '$empStat', '$prime_ID_Type', '$target_file_prime', '$second_ID_Type', '$target_file_second')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

    // Redirect to home.php
    header('Location: home.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>