<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['add_student'])) {
    // Your existing code for processing text inputs
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $uid = $_POST['uid'];
    $dob = new DateTime($_POST['dob']);
    $email = $_POST['email'];
    $section = $_POST['section'];
    $mobile = $_POST['mobile'];
    $cgpa = floatval($_POST['cgpa']);
    $percentage_10th = floatval($_POST['percentage_10th']);
    $percentage_12th = floatval($_POST['percentage_12th']);
    $backlogs = intval($_POST['backlogs']);

    // Securely hash the password
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $dob = $dob->format('Y-m-d');

    // Handle the uploaded profile image
    $targetDirectory = "img/student_images/";
    $targetFile = $targetDirectory . basename($_FILES["profile_image"]["name"]);
    $uploadOk = true;

    // Check if the file is an actual image
    $imageInfo = getimagesize($_FILES["profile_image"]["tmp_name"]);
    if ($imageInfo === false) {
        echo "Invalid image file.";
        $uploadOk = false;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = false;
    }

    // Check file size (adjust the limit as needed)
    if ($_FILES["profile_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = false;
    }

    // Allow only certain file formats (you can expand this list)
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = false;
    }

    if ($uploadOk) {
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
            // File was successfully uploaded
            echo "The file " . htmlspecialchars(basename($_FILES["profile_image"]["name"])) . " has been uploaded.";


            $conn = new mysqli("localhost", "root", "", "placement_cell_website");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Assuming you have a table named 'students'
            $sql = "INSERT INTO users (first_name, last_name, uid, dob, email, section, mobile, cgpa, percentage_10th, percentage_12th, backlogs, password, profile_image)
                    VALUES ('$first_name', '$last_name', '$uid', '$dob', '$email', '$section', '$mobile', '$cgpa', '$percentage_10th', '$percentage_12th', '$backlogs', '$password', '$targetFile')";

            if ($conn->query($sql) === TRUE) {
                echo "Student record inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            // Error handling if the file upload fails
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
