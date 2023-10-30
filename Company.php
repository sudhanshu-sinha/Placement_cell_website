<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company | Chandigarh University</title>
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

    <section class="company">
        <h1>OUR RECRUITERS </h1>
        <div class="company_name">
            <div class="company_logo">
                <img src="img/amazon.png" alt="Amazon">
            </div>
            <div class="company_logo">
                <img src="img/microsoft.webp" alt="Amazon">
            </div>
            <div class="company_logo">
                <img src="img/google.png" alt="Goggle">
            </div>
            <div class="company_logo">
                <img src="img/paypal.png" alt="PayPal">
            </div>
            <div class="company_logo">
                <img src="img/deloitte.png" alt="Deloitte">
            </div>
            <div class="company_logo">
                <img src="img/mahindra.png" alt="Mahindra">
            </div>
            <div class="company_logo">
                <img src="img/paloalto.png" alt="Paloalto">
            </div>
            <div class="company_logo">
                <img src="img/linkedin.png" alt="LinkedIn">
            </div>
            <div class="company_logo">
                <img src="img/nutanix.png" alt="Nutanix">
            </div>
            <div class="company_logo">
                <img src="img/flipkart.png" alt="Flipkart">
            </div>
            <div class="company_logo">
                <img src="img/hp.png" alt="HP">
            </div>
            <div class="company_logo">
                <img src="img/ibm.png" alt="IBM">
            </div>
            <div class="company_logo">
                <img src="img/samsung.png" alt="Samsung">
            </div>
            <div class="company_logo">
                <img src="img/intel.png" alt="Intel">
            </div>
            <div class="company_logo">
                <img src="img/qualcomm.png" alt="Qualcomm">
            </div>
            <div class="company_logo">
                <img src="img/american_express.png" alt="American_Express">
            </div>
            <div class="company_logo">
                <img src="img/Marvel.png" alt="Marvel">
            </div>
            <div class="company_logo">
                <img src="img/goldman_scah.png" alt="Goldman_Sachs">
            </div>
            <div class="company_logo">
                <img src="img/infosys.png" alt="Infosys">
            </div>
            <div class="company_logo">
                <img src="img/capgemini.png" alt="Capgemini">
            </div>
            <div class="company_logo">
                <img src="img/wipro.png" alt="Wipro">
            </div>
            <div class="company_logo">
                <img src="img/zomato.png" alt="Zomato">
            </div>
            <div class="company_logo">
                <img src="img/cognizant.png" alt="Cognizant">
            </div>
            <div class="company_logo">
                <img src="img/dell.png" alt="DELL">
            </div>
            <div class="company_logo">
                <img src="img/hcl.png" alt="HCL">
            </div>
            <div class="company_logo">
                <img src="img/tcs.png" alt="TCS">
            </div>
            <div class="company_logo">
                <img src="img/oracle.png" alt="Oracle">
            </div>
            <div class="company_logo">
                <img src="img/indusind.png" alt="indusind">
            </div>
            <div class="company_logo">
                <img src="img/motorola.png" alt="Motorola">
            </div>
            <div class="company_logo">
                <img src="img/nokia.png" alt="Nokia">
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