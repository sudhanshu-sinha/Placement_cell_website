<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user data from the form
    $uid = $_POST['uid'];
    $password = $_POST['password'];

    // Check user credentials
    $conn = new mysqli("localhost", "root", "", "placement_cell_website");
    $sql = "SELECT id, first_name, password, is_admin FROM users WHERE uid = '$uid'"; 
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION['user_id'] = $row["id"];
            $_SESSION['uid'] = $row["uid"];
            $_SESSION['is_admin'] = $row["is_admin"];
            if ($_SESSION['is_admin'] == 1) {
                header("Location: admin.php"); 
            } else {
                header("Location: faq.php"); 
            }
            exit(); 
        }
        else {
            echo "Invalid password.";
        }
    } 
    else {
        echo "UID not found.";
    }
    $conn->close();
}
?>