<!DOCTYPE html>
<html>
<head>
    <title>Review Company Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 650px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: auto;
        }
        .profile-details {
            margin-bottom: 20px;
        }
        .review-form {
            margin-top: 20px;
        }
        .review-form button {
            margin-right: 10px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .approve-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
        }
        .reject-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Review Company Profile</h1>
        
        <?php
        // Database connection
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.html");
            exit();
        }
        require('db.php');

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM upcoming_companies WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Display company profile details
                echo '<div class="profile-details">';
                echo '<h3>Company Name: ' . $row['company_name'] . '</h3>';
                echo '<p>Email: ' . $row['email'] . '</p>';
                echo '<p>Description: </p>';
                echo "<div class='companyDescription'>" . html_entity_decode($row["companyDescription"]) . "</div>";
                echo '</div>';

                // Approve and reject buttons
                echo '<div class="review-form">';
                echo '<form action="approval.php" method="post">';
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                echo '<button type="submit" class="approve-btn" name="approve" onclick="showLoading()">Approve</button>';
                echo '<button type="submit" class="reject-btn" name="reject" onclick="showLoading()">Reject</button>';
                echo '</form>';
                echo '<div id="loading" style="display:none;">Loading...</div>';
                echo '</div>';
                echo '<script>
                    function showLoading() {
                        document.getElementById("loading").style.display = "block";
                    }
                    </script>';       
            } else {
                echo "Company profile not found.";
            }
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
