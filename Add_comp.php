<?php

// Handle adding upcoming companies
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_company'])) {
    // Get company data from the form
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $eligibility_cgpa = floatval($_POST['eligibility_cgpa']);
    $eligibility_percentage_10th = floatval($_POST['eligibility_percentage_10th']);
    $eligibility_percentage_12th = floatval($_POST['eligibility_percentage_12th']);
    $eligibility_backlogs = intval($_POST['eligibility_backlogs']);
    $number_of_openings = intval($_POST['openings']);
    $start_date = date($_POST['start_date']);
    $last_date = date($_POST['last_date']);
    

    
    $conn = new mysqli("localhost", "root", "", "placement_cell_website");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    $sql = "INSERT INTO upcoming_companies (company_name, position, eligibility_cgpa, eligibility_percentage_10th, eligibility_percentage_12th, eligibility_backlogs, number_of_openings, start_date, last_date) 
            VALUES ('$company_name', '$position', $eligibility_cgpa, $eligibility_percentage_10th, $eligibility_percentage_12th, $eligibility_backlogs, $number_of_openings, $start_date, $last_date)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Company added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>