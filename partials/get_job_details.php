<?php
        // Database connection
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php");
            exit();
        }
        require('db.php');

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM upcoming_companies WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                echo '<header class="job_heading">';
                echo '<div class="job_head">';
                echo '<div class="comp_des_logo">';
                echo '<div class="comp_des_logo_img">';
                echo '<img src="img/google.png">';
                echo '</div>';
                echo '<p>'.$row['company_name'].'</p>';
                echo '</div>';
                echo '<div class="comp_des_role">';
                echo '<p>'.$row['position'].'</p>';
                echo '</div>';
                echo '<div class="comp_des_location">';
                echo '<p>'.$row['location'].'</p>';
                echo '</div>';
                echo '</div>';
                echo '<div class="job_head_right">';
                echo '<div class="review">';
                echo '<button class="review_button" onclick="applyNow()">Apply Now</button>';
                echo '</div>';
                echo '</div>';
                echo '</header>';
                echo '<section class="job_description">';
                echo '<div class="job_desc">';
                echo '<div>';
                echo "<div class='companyDescription'>" . html_entity_decode($row["companyDescription"]) . "</div>";
                echo '</div>';
                echo '</div>';
                echo '</section>';               
            } else {
                echo "Company profile not found.";
            }
        }
        $conn->close();
        ?>