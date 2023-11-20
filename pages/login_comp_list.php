<section class="company" id="company">
        <h2>Upcoming Company</h2>
        <div class="container">
            <div class="comp_grid">
                <div class="scrollable">
                    <div class="comp_col" id="companyList">
                    <?php
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.html");
            exit();
        }
// Database connection
$conn = new mysqli("localhost", "root", "", "placement_cell_website");

// SQL query to fetch all companies
$sql = "SELECT * FROM upcoming_companies WHERE approval_status = 'Approved'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo '<div class="upcomming_company" data-company-id="' . $row['id'] . '" onclick="updateJobDetails(this, ' . $row['id'] . ')">';
    echo '<div class = "info">';
    echo '<div class = "comp_title">';
    echo '<div class = "comp_title2">';
    echo '<div class="comp_logo">';
    echo "<img src = img/google.png>";
    echo '</div>';
    echo '<div>';
    echo "<p><b>" . $row['position'] . "</b></p>";
    echo "<small>" . $row['company_name'] . "</small>";
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

$conn->close();
?>
                    </div>
                </div>
                <div class="right_col_grid">
                    <div class="job_details" id="jobDetails">
                    

                    </div>
                </div>
            </div>
        </div>
    </section>



