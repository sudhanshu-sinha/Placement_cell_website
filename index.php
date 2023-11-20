<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Cell | Chandigarh University</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="img/favicon_io/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600;700&family=Delicious+Handrawn&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tillana:wght@400;500;600;700;800&family=Work+Sans:ital,wght@0,500;0,600;1,500&display=swap"
        rel="stylesheet">
    <style>
    <?php require 'partials/login_style.php' ?>
    </style>
</head>

<body>
    <?php require 'partials/nav.php' ?>
    <!-- login popup -->
    <?php require 'partials/login.php' ?>


    <section class="hero">
        <h1>Training & Placement Cell</h1>
        <div class="hero_text">
            <b><i>#BATCH@2023</i></b>
            <h1>Maintaining The Tradition Of Excellence,</h1>
            <h2>CU Registers 9124 Placement Offers<br>
                <small>(Highest in India)</small>
            </h2>
        </div>
    </section>

    <section class="message">
        <div class="container">
            <div class="column">
                <h2><span>CHANDIGARH UNIVERSITY</span><br> LEADER IN CAMPUS PLACEMENTS</h2>
                <p>Dreaming of working with Fortune 500, Top 100 Companies of India, then Chandigarh University is the platform where you can think of realizing your dreams. Based on strong Industry-Academic interface, Chandigarh University happens to be
                    setting new benchmarks in campus placements. Year after year top notch companies such as Microsoft, Amazon, Walt Disney, IBM, Flipkart, SAP Labs are visiting CU Campus for recruitment of fresh talent. As a result, Chandigarh University
                    has been awarded with the title "University with Best Placements" in India. With more than 858 Multi-Nationals visiting CU Campus in Batch 2023, the number of offers have touched 9124 and the highest package has registered a growth
                    of 30% & have scaled to a new high of 1.7 CR in International Placements followed by 54.75 LPA in National Placements.</p>
                <p>Maintaining The Tradition Of Excellence, CU Registers 9124 Placement Offers for 2023 Batch (Highest in India).</p>
                <p>There have been more than 60 MNC's which have recruited Engineering students from Chandigarh University, IITs and NIT's where there have been 40+ MNC's who have commonly recruited fresh talent from University School of Business at Chandigarh
                    University and IIMs. Apart from it, some of the leading multinationals which regularly recruit CU students include Microsoft, Amazon, IBM, Hewlett Packard, SAP Labs, Hitachi, Deloitte, Ernst & Young, Grail Research, TAFE, John Deere,
                    Schindler, Deepak Nitrate, Mindtree, The Taj, Oberoi, Hyatt, Vistara and Jet Airways.</p>
                <p><b>Our Corporate Relations Office (Head Office) is located in West Delhi
                        (Janakpuri).<br>
                        For any query, you can dial us @ 9716145931</b></p>
            </div>
            <div class="column">
                <div class="mam_info">
                    <div class="mam_dp">
                        <img src="img/mam_dp.jpg" alt="mam_dp">
                    </div>
                    <div class="mam_name">
                        <span>Vice President</span>
                        <h3>Prof. Himani Sood</h3>
                        <small>Chandigarh University</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'partials/footer.php' ?>

        <script>
            // JavaScript code for handling these mobile menu toggle
            document.addEventListener("DOMContentLoaded", function() {
                const mobileButton = document.getElementById("mobile");
                const navbar = document.getElementById("navbar");
                const menuIcon = document.getElementById("menu-icon");

                mobileButton.addEventListener("click", function() {
                    navbar.classList.toggle("active");
                    menuIcon.classList.toggle("fa-bars");
                    menuIcon.classList.toggle("fa-times");
                });
            });

            var currentPage = window.location.href;
            var links = document.querySelectorAll("nav ul li a");

            for (var i = 0; i < links.length; i++) {
                if (links[i].href === currentPage) {
                    links[i].classList.add('active');
                }
            }


            const loginButton = document.getElementById("loginButton");
            const loginPopup = document.getElementById("loginPopup");
            const closeButton = document.getElementById("closeButton");

            loginButton.addEventListener("click", () => {
                loginPopup.style.display = "block";
            });

            closeButton.addEventListener("click", () => {
                loginPopup.style.display = "none";
            });

            window.addEventListener("click", (event) => {
                if (event.target == loginPopup) {
                    loginPopup.style.display = "none";
                }
            });
        </script>
</body>

</html>