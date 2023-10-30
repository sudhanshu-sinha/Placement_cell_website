<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

// Get user's ID from the session
$userId = $_SESSION['user_id'];

$conn = new mysqli("localhost", "root", "", "placement_cell_website");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database to fetch the entire user profile
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

// Fetch the user's profile data
if ($row = $result->fetch_assoc()) {
    $firstName = $row['first_name'];
    $uid = $row['uid'];
    $image_filename = $row['profile_image'];
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Chandigarh University</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600;700&family=Delicious+Handrawn&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tillana:wght@400;500;600;700;800&family=Work+Sans:ital,wght@0,500;0,600;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>

<body>
    <?php require 'partials/sidebar.php' ?>

    <section class="home-section">
        <div class="text">Dashboard</div>
    </section>
        <!-- Form to add upcoming companies with eligibility criteria -->
    <section class="company" id="company">
        <h2>Upcoming Company</h2>
        <div class="container">
            <div class="comp_row">
                <div class="scrollable">
                    <div class="comp_col">
                    <?php
                    $conn = new mysqli("localhost", "root", "", "placement_cell_website");
                    $sql = "SELECT * FROM upcoming_companies";
                    $result = $conn->query($sql);
                
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="upcomming_company">';
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
                        echo '<div class = "time">';
                        echo "<p>Start Date: " . $row['start_date']."</p>";
                        echo "<p>End Date: " . $row['last_date']."</p>";
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } ?>
                    </div>
                </div>
            </div>
            <div class="add">
                <button type="submit" id="add_company">Add Company</button>
            </div>
        </div>
    </section>

    <?php require 'partials/add_comp.php' ?>

    <section class = "Students" id="Students">
    <div class="student_container">
        <!-- Left Column: Add Student Form -->
        <div class="column1">
            <div class="add_comp">
            <h2>Add Student</h2>
            <form action="add_student.php" method="post" class="form">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>

                <button type="submit" name="add_student">Add Student</button>
                </div>
            </form>
        </div>

        <!-- Right Column: Search and Student List -->
        <div class="column2">
            <h2>Search Students</h2>
            <input type="text" id="search" placeholder="Search by name...">
            <div class="scrollable">
                <?php
                $conn = new mysqli("localhost", "root", "", "placement_cell_website");
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="Student_details">';
                    echo '<div class="divide">';
                    echo '<div class="stu_img">';
                    echo "<img src = img/student_images/" . $row['profile_image'] . ">";
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="divide">';
                    echo "<p><b>Name: </b>" . $row['first_name'] . " " . $row['last_name'] . "</p>";
                    echo "<p><b>UID: </b>" . $row['uid']."</p>";
                    echo "<p><b>Section: </b>" . $row['section'] . "</p>";
                    echo '</div>';
                    echo '<div class="divide">';
                    echo "<p><b>CGPA: </b>" . $row['cgpa'] . "</p>";
                    echo "<p><b>Backlogs: </b>" . $row['backlogs'] . "</p>";
                    echo "<p><b>" . $row['status'] . " At " . $row['company'] . "</b></p>";
                    echo '</div>';
                    echo '</div>';
                }
                $conn->close();
                ?>
            </div>
            <div class = "add">
            <button type="submit" name="add_student">Add Student</button>
            </div>
        </div>
    </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");
        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); 
        });
        searchBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); 
        });

        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); 
            }
        }


        //popup
        const loginButton = document.getElementById("add_company");
            const Popup = document.getElementById("Popup");
            const closeButton = document.getElementById("closeButton");

            loginButton.addEventListener("click", () => {
                Popup.style.display = "block";
            });

            closeButton.addEventListener("click", () => {
                Popup.style.display = "none";
            });

            window.addEventListener("click", (event) => {
                if (event.target == Popup) {
                    Popup.style.display = "none";
                }
            });
    </script>
</body>

</html>