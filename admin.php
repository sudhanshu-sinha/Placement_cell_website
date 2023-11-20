<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Get user's ID from the session
$userId = $_SESSION['user_id'];

$conn = new mysqli("localhost", "root", "", "placement_cell_website");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database to fetch the user profile
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
    <link rel="icon" type="image/png" href="img/favicon_io/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600;700&family=Delicious+Handrawn&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tillana:wght@400;500;600;700;800&family=Work+Sans:ital,wght@0,500;0,600;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/ceiy0f4isn56x7175wq9bxyipr6hb2ej0nt6mvmoy5yrpyz0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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
            <form id="filterForm">
                <label for="approvalFilter">Filter by Approval Status:</label>
                <select id="approvalFilter" name="approvalFilter">
                    <option value="all">All</option>
                    <option value="approved">Approved</option>
                    <option value="pending">Pending</option>
                    <option value="rejected">Rejected</option>
                </select>
            </form>
            <div class="comp_row">
                <div class="scrollable">
                    <div class="comp_col" id="companyList">
                        <!--filtered companies will displayed here-->
                        <?php require('partials/companies_list.php') ?>
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
            <h2><center>Add Student</center></h2>
            <form action="add_students.php" method="post" class="form add_stu" enctype="multipart/form-data">
                <div class="form-control">
                    <input type="file" name="profile_image" id="profile_image" accept="image/*">
                </div>
                <div class="form-control">
                    <input type="text" name="first_name" required>
                    <label>First Name</label>
                </div>
                <div class="form-control">
                    <input type="text" name="last_name" required>
                    <label>Last Name</label>
                </div>
                <div class="form-control">
                    <input type="text" name="uid" required>
                    <label>UID</label>
                </div>
                <div class="form-control">
                    <input type="date" name="dob" required>
                    <label>D.O.B</label>
                </div>
                <div class="form-control">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="form-control">
                    <input type="text" name="section" required>
                    <label>Section</label>
                </div>
                <div class="form-control">
                    <input type="text" name="mobile" required>
                    <label>Mobile No.</label>
                </div>
                <div class="form-control">
                    <input type="text" name="cgpa" required>
                    <label>CGPA</label>
                </div>
                <div class="form-control">
                    <input type="text" name="percentage_10th" required>
                    <label>10th %age</label>
                </div>
                <div class="form-control">
                    <input type="text" name="percentage_12th" required>
                    <label>12th %age</label>
                </div>
                <div class="form-control">
                    <input type="text" name="backlogs" required>
                    <label>Backlogs</label>
                </div>
                <div class="form-control">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
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
                    echo "<img src =" . $row['profile_image'] . ">";
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
    <div id="reviewModal" class="modal">
        <div class="modal-content">
            <span class="review_close" onclick="closeModal()">&times;</span>
            <iframe id="reviewIframe" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>
        </div>
    </div>

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

        $('#approvalFilter').change(function() {
        applyFilter();
        });

        function applyFilter() {
            var filterValue = $('#approvalFilter').val();

            // AJAX to send the filter value to the server
            $.ajax({
                type: 'GET',
                url: 'partials/filter_companies.php', // Update the URL to the server-side script
                data: { approvalFilter: filterValue },
                success: function(response) {
                    // Update the content of the companyList div with the filtered data
                    $('#companyList').html(response);
                }
            });
        }


        //popup
        const AddCompButton = document.getElementById("add_company");
            const Popup = document.getElementById("Popup");
            const closeButton = document.getElementById("closeButton");

            AddCompButton.addEventListener("click", () => {
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

        //review popu
        function openModal(companyId) {
            // Set the review.php URL with the company ID
            var reviewUrl = 'partials/review.php?id=' + companyId;

            // Set the href of the review iframe to the dynamic URL
            document.getElementById('reviewIframe').src = reviewUrl;
            
            // Display the modal
            document.getElementById('reviewModal').style.display = 'block';
        }

        function closeModal() {
            // Close the modal and reset the iframe
            document.getElementById('reviewModal').style.display = 'none';
            document.getElementById('reviewIframe').src = '';
            location.reload();   
        }

        //textarea 
        tinymce.init({
            selector: '#companyDescription',
            plugins: 'lists bold italic underline strikethrough aligncolor',
            toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | forecolor backcolor | bullist numlist',
            height: 300
        });

    </script>
</body>

</html>