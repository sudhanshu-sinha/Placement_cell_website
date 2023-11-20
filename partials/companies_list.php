<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "placement_cell_website");

// SQL query to fetch all companies
$sql = "SELECT * FROM upcoming_companies";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo '<div class="upcomming_company" data-approval="' . strtolower($row['approval_status']) . '">';
    echo '<div class = "info">';
    echo '<div class = "comp_title">';
    echo '<div class = "comp_title">';
    echo '<div class="comp_logo">';
    echo "<img src = img/google.png>";
    echo '</div>';
    echo '<div>';
    echo "<p><b>" . $row['position'] . "</b></p>";
    echo "<small>" . $row['company_name'] . "</small>";
    echo '</div>';
    echo '</div>';
    echo '<div class = "comp_requirement">';
    echo '<span class = "req_item">';
    echo "CGPA: " . $row['eligibility_cgpa'] . " & Above";
    echo '</span>';
    echo '<span class = "req_item">';
    echo "10th: " . $row['eligibility_percentage_10th'] . " & Above";
    echo '</span>';
    echo '<span class = "req_item">';
    echo "12th: " . $row['eligibility_percentage_12th'] . " & Above";
    echo '</span>';
    echo '<span class = "req_item">';
    echo "Backlogs: " . $row['eligibility_backlogs'] . " & Above";
    echo '</span>';
    echo '</div>';
    echo '<div class = "review">';
    if ($row['approval_status'] == 'Pending') {
        echo '<button class="review_button" onclick="openModal(' . $row['id'] . ')">Review</button>';
    } else if ($row['approval_status'] == 'Approved'){
        echo '<p class="approved">' . $row['approval_status'] . '</p>';
    }
    else {
        echo '<p class="rejected">'. $row['approval_status'] .'</p>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

$conn->close();
?>