<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Network | Chandigarh University</title>
    <link rel="stylesheet" href="css/styles.css">
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

    <section class="Alumni">
        <h1>OUR ALUMNI NETWORK</h1>
        <div class="grid_container">
            <div class="alumni_card">
                <div class="batch">
                    <span>#2021-2025</span>
                    <text>BE-CSE</text>
                </div>
                <img src="img/Alumni/myimg.jpeg" alt="">
                <h2>Sudhanhsu Sinha</h2>
                <p>Company: Microsoft</p>
                <a href="https://www.linkedin.com/in/sinha-sudhanshu/" target="_blank">LinkedIn Profile</a>
            </div>
            <div class="alumni_card">
                <div class="batch">
                    <span>#2021-2025</span>
                    <text>BE-CSE</text>
                </div>
                <img src="img/Alumni/myimg.jpeg" alt="">
                <h2>Sudhanhsu Sinha</h2>
                <p>Company: Microsoft</p>
                <a href="https://www.linkedin.com/in/sinha-sudhanshu/" target="_blank">LinkedIn Profile</a>
            </div>
            <div class="alumni_card">
                <div class="batch">
                    <span>#2021-2025</span>
                    <text>BE-CSE</text>
                </div>
                <img src="img/Alumni/myimg.jpeg" alt="">
                <h2>Sudhanhsu Sinha</h2>
                <p>Company: Microsoft</p>
                <a href="https://www.linkedin.com/in/sinha-sudhanshu/" target="_blank">LinkedIn Profile</a>
            </div>
            <div class="alumni_card">
                <div class="batch">
                    <span>#2021-2025</span>
                    <text>BE-CSE</text>
                </div>
                <img src="img/Alumni/myimg.jpeg" alt="">
                <h2>Sudhanhsu Sinha</h2>
                <p>Company: Microsoft</p>
                <a href="https://www.linkedin.com/in/sinha-sudhanshu/" target="_blank">LinkedIn Profile</a>
            </div>
            <div class="alumni_card">
                <div class="batch">
                    <span>#2021-2025</span>
                    <text>BE-CSE</text>
                </div>
                <img src="img/Alumni/myimg.jpeg" alt="">
                <h2>Sudhanhsu Sinha</h2>
                <p>Company: Microsoft</p>
                <a href="https://www.linkedin.com/in/sinha-sudhanshu/" target="_blank">LinkedIn Profile</a>
            </div>
            <div class="alumni_card">
                <div class="batch">
                    <span>#2021-2025</span>
                    <text>BE-CSE</text>
                </div>
                <img src="img/Alumni/myimg.jpeg" alt="">
                <h2>Sudhanhsu Sinha</h2>
                <p>Company: Microsoft</p>
                <a href="https://www.linkedin.com/in/sinha-sudhanshu/" target="_blank">LinkedIn Profile</a>
            </div>
        </div>
    </section>


    <?php require 'partials/footer.php' ?>

    <script>
        // JavaScript code for handling the mobile menu toggle
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