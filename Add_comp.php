<?php

session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php");
            exit();
        }

// Handle adding upcoming companies
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_company'])) {
    // Get company data from the form
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $location = $_POST['location'];
    $eligibility_cgpa = floatval($_POST['eligibility_cgpa']);
    $eligibility_percentage_10th = floatval($_POST['eligibility_percentage_10th']);
    $eligibility_percentage_12th = floatval($_POST['eligibility_percentage_12th']);
    $eligibility_backlogs = intval($_POST['eligibility_backlogs']);
    $number_of_openings = intval($_POST['openings']);
    
    $start_date = new DateTime($_POST['start_date']);
    $last_date = new DateTime($_POST['last_date']);
    
    // Format dates to 'Y-m-d' for MySQL
    $start_date = $start_date->format('Y-m-d');
    $last_date = $last_date->format('Y-m-d');
    
    $companyDescription = isset($_POST['companyDescription']) ? $_POST['companyDescription'] : '';
    $companyDescription = htmlspecialchars($companyDescription);

    $conn = new mysqli("localhost", "root", "", "placement_cell_website");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("INSERT INTO upcoming_companies (company_name, position, location, eligibility_cgpa, eligibility_percentage_10th, eligibility_percentage_12th, eligibility_backlogs, number_of_openings, start_date, last_date, companyDescription) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssddddssss", $company_name, $position, $location, $eligibility_cgpa, $eligibility_percentage_10th, $eligibility_percentage_12th, $eligibility_backlogs, $number_of_openings, $start_date, $last_date, $companyDescription);

    if ($stmt->execute()) {
        echo "Company added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}


$conn->close();

?>
