<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_US | Chandigarh University</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="img/favicon_io/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600;700&family=Delicious+Handrawn&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tillana:wght@400;500;600;700;800&family=Work+Sans:ital,wght@0,500;0,600;1,500&display=swap"
        rel="stylesheet">
    <style>
        .contact {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .contact_us {
            padding: 20px;
            background-color: rgba(97, 191, 249, 0.605);
            border-radius: 5%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 850px;
            height: 500px;
        }

        label {
            margin-top: 10px;
            display: block;
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        textarea {
            min-height: 160px;
        }

        input[type="submit"] {
            margin-top: 10px;
            background-color: #e91e63;
            border-radius:5px;
            color: #ffffff;
            font-size: 20px;
            font-weight: 500;
            max-width: 120px;
            padding: 10px;
        }
        input[type="submit"]:hover{
            Background-color:rgba(127, 30, 172, 0.651);
        }

        <?php require 'partials/login_style.php' ?>
    </style>
</head>

<body>
    <?php require 'partials/nav.php' ?>
    <!-- login popup -->
    <?php require 'partials/login.php' ?>

    <section class="contact">
        <h1>Contact US</h1>
        <div class="contact_us">
            <form>
                <label for="fname">First Name</label>
                <input type="text" id="fname" placeholder="Your Name">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" placeholder="Your Last Name">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Your Email ID">
                <label for="message">Message</label>
                <textarea id="message" placeholder="Write Something......"></textarea>
                <input type="submit">
            </form>
        </div>
    </section>

    
    <?php require 'partials/footer.php' ?>

    <script>
        // JavaScript code for handling the mobile menu toggle
        document.addEventListener("DOMContentLoaded", function () {
            const mobileButton = document.getElementById("mobile");
            const navbar = document.getElementById("navbar");
            const menuIcon = document.getElementById("menu-icon");

            mobileButton.addEventListener("click", function () {
                navbar.classList.toggle("active");
                menuIcon.classList.toggle("fa-bars");
                menuIcon.classList.toggle("fa-times");
            });
        });

        var currentPage = window.location.href;
        var links = document.querySelectorAll("nav ul li a");

        for (var i=0;i<links.length;i++)
        {
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