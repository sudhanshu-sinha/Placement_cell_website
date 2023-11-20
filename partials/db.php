<?php 

$conn = new mysqli("localhost", "root", "", "placement_cell_website");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>