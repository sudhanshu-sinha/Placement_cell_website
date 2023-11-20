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
    <title><?php echo ' '. $row['first_name'] . ' | '. $row['uid']. ''?></title>
    <link rel="stylesheet" href="css/user.css">
    <link rel="icon" type="image/png" href="img/favicon_io/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600;700&family=Delicious+Handrawn&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tillana:wght@400;500;600;700;800&family=Work+Sans:ital,wght@0,500;0,600;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="sidebar open">
        <div class="logo-details">
            <img src="img/chandigarh-university-logo-cu_freelogovectors.net_-250x400.webp" class="icon">
            <div class="logo_name">CHANDIGARH UNIVERSITY</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li id="search">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li id="dashboard">
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li id="upcoming">
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Upcoming Companies</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li id="company">
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Company</span>
                </a>
                <span class="tooltip">Comapany</span>
            </li>
            <li id="alumni">
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Alumni</span>
                </a>
                <span class="tooltip">Alumni</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="<?php echo $image_filename; ?>" alt="profileImg">
                    <div class="name_job">
                        <div class="name">
                            <?php echo $firstName; ?>
                        </div>
                        <div class="job">
                            <?php echo $uid; ?>
                        </div>
                    </div>
                </div>
                <form method="post" action="admin.php">
                    <button type="submit" name="logout"><i class='bx bx-log-out' id="log_out"></i></button>
                </form>
            </li>
        </ul>
    </div>
    <Header class="header">
        <div class="text">Dashboard</div>
        <div class="notification-bell">
        <i class='bx bxs-bell'></i>
        </div>
    </Header>
    <Section class="hero" id="content">
        <?php require('pages/profile.php')?>
    </Section>

    <div class="notification">
        <div class="notify_head">
            <p> Notifications </p>
            <div class="notification-close">
                <i class="bx bxs-x-circle icons"></i>
            </div>
        </div>
        <div class="notify_body">
            <div class="notify_body_content">
                
            </div>
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

        //click handlers to each <li> element
        $('#dashboard').on('click', function() {
            window.parent.location.reload();
        });

        $('#upcoming').on('click', function() {
            loadPage('pages/login_comp_list.php');
        });

        $('#company').on('click', function() {
            loadPage('pages/login_comp.php');
        });

        $('#alumni').on('click', function() {
            loadPage('pages/login_alumni.php');
        });

        function loadPage(pageUrl) {
            // Use AJAX to load content based on the selected page
            $.ajax({
                type: 'GET',
                url: pageUrl,
                success: function(response) {
                    // Update content of the 'content' div with the loaded page content
                    $('#content').html(response);
                
                    var firstCompany = document.querySelector(".upcomming_company");
                
                    if (firstCompany) {
                        // Get company ID from the first upcomming_company div
                        var companyId = firstCompany.dataset.companyId;
                    
                        updateJobDetails(firstCompany, companyId);
                    }
                }
            });
        }

        function updateJobDetails(element, companyId) {
            var upcommingCompanies = document.getElementsByClassName("upcomming_company");
            for (var i = 0; i < upcommingCompanies.length; i++) {
                upcommingCompanies[i].classList.remove("selected");
            }

            element.classList.add("selected");

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // Update the job_details div with the received content
                    document.getElementById("jobDetails").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "partials/get_job_details.php?id=" + companyId, true);
            xhttp.send();
        }

        $(document).ready(function () {
        $(".notification-bell").on("click", function () {
            // AJAX request to get notifications for the logged-in user
            $.ajax({
                type: 'GET',
                url: 'notification.php',
                success: function (response) {
                    var notifications = JSON.parse(response);
                    updateNotificationBox(notifications);
                }
            });

            $(".notification").toggleClass("visible");
        });

        $(".notification-close").on("click", function () {
            $(".notification").removeClass("visible");
        });

        // update the notification box
        function updateNotificationBox(notifications) {
            var notifyBody = $(".notify_body_content");

            // Clear existing notifications
            notifyBody.empty();

            // Add new notifications
            for (var i = 0; i < notifications.length; i++) {
                var notification = notifications[i];
                var notificationHtml = '<div class="notify_body_content_box">'+'<div class="notification_box">' +
                    '<div class="notify_logo"></div>' +
                    '<div class="notify_content_company">' +
                    '<div class="notify_content_position">' + notification.message + '</div>' +
                    '<div class="notify_content_name">' + notification.timestamp + '</div>' +
                    '</div>' +
                    '</div>'+
                    '</div>';

                notifyBody.append(notificationHtml);
            }
        }
    });


        
    </script>
</body>

</html>