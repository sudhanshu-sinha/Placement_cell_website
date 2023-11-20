<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | Chandigarh University</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="img/favicon_io/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600;700&family=Delicious+Handrawn&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tillana:wght@400;500;600;700;800&family=Work+Sans:ital,wght@0,500;0,600;1,500&display=swap"
        rel="stylesheet">

    <style>
        * {
            color: #000;
            font-family: 'Work Sans', sans-serif;
        }

        .faq {
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        h1 {
            text-transform: uppercase;
            font-size: 60px;
            text-align: center;
            font-weight: 500;
            -webkit-font-smoothing: antialiased;
        }

        .faq-heading {
            width: 100%;
            background-image: url("img/blue.jpg");
            background-size: cover;
            background-repeat: repeat;
            background-position: center;
            margin-top: 100px;
            margin-bottom: 20px;
        }

        .faq-des {
            margin: 20px 40px;
        }

        .faq-des p {
            margin-top: 20px;
            text-align: justify;
        }

        .faq-container {
            margin: 20px 0px;
            width: 75%;
            display: grid;
            justify-content: center;
            align-items: center;
            grid-template-rows: repeat(10 1fr);
            gap: 20px;
        }

        .faq_box {
            border-radius: 5px;
            background-color: #fff;
            transition: 0.4s ease-in-out;
        }

        .activate,
        .faq_box:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        /* Style the buttons that are used to open and close the faq-page body */
        .faq-page {
            color: #444;
            cursor: pointer;
            padding: 30px 20px;
            border: none;
            outline: none;
            transition: 0.4s;
            margin: auto;
            border-radius: 5px 5px 0px 0px;
            transition: 0.3s ease-in-out;
        }

        .activate,
        .faq-page:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Style the faq-page panel. Note: hidden by default */
        .faq-body {
            margin: auto;
            /* text-align: center; */
            padding: 20px 50px;
            display: none;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .faq-body p{
            text-align: justify;
        }

        .faq-page:after {
            content: '\2795';
            /* Unicode character for "plus" sign (+) */
            font-size: 13px;
            float: right;
            margin-left: 5px;
        }

        .activate:after {
            content: "\2796";
            /* Unicode character for "minus" sign (-) */
        }

        <?php require 'partials/login_style.php' ?>

    </style>
</head>

<body>
    <?php require 'partials/nav.php' ?>
    <!-- login popup -->
    <?php require 'partials/login.php' ?>    

    <main class="faq">
        <div class="faq-heading">
            <h1>Placement FAQs 2023</h1>
        </div>
        <div class="faq-des">
            <h2>Frequently Asked Questsions(FAQs) By Students:</h2>
            <p>The placement cell initiatives are aimed at providing best opportunities in the corporate sector to
                students according to their ability. Students are advised to read through the following FAQs
                carefully to understand this site:</p>
        </div>
        <section class="faq-container">
            <div class="faq_box">
                <h2 class="faq-page">when are campus recruitments conducted?</h2>
                <div class="faq-body">
                    <p>companies seeking to recruit fresh graduates visit the university (virtual/in-person), to
                        conduct
                        recruitment drives to recruit final-year students. </p>
                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">When are campus recruitment conducted?</h2>
                <div class="faq-body">
                    <p class="head-body">In a given academic calendar, campus recruitment begins at the begining of the
                        penultimate semester.
                        It starts in the month of August and goes n till the end of the academic year and even
                        beyond
                        somentimes.</p>

                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">What should students do to participate in the campus placemnets?</h2>
                <div class="faq-body">
                    <p>Students interested in the campus placements should register themselves with the
                        placements
                        department. Student enrolments are announced at the end of the pre-final year. The
                        enrolment is done
                        online where students receive an email invitation and are advised to fill up the
                        registration form
                        within the stipulated time.</p>
                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">Can every student in the institute participate in campus placements?</h2>
                <div class="faq-body">
                    <p>Only those students who meet the eligibility criteria specified by the companies, can
                        participate.
                    </p>
                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">What are the eligibility criteria to participate in the campus placements?
                </h2>
                <div class="faq-body">
                    <p>Various companies have varied eligibility criteria. However, the University has a
                        standardised
                        criteria for participating in campus recruitments. The Placement Policy is published
                        every year
                        before the campus recruitment season. Students are advised to refer to the placement
                        policy and
                        guidelines.</p>
                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">What is a technical interview?</h2>
                <div class="faq-body">
                    <p>This is conducted to test the technical knowledge of the students. ∙ Questions are based
                        on the
                        basics of engineering subjects studied by the students. For students having completed
                        certification
                        courses, his/her knowledge in that area is also tested.</p>
                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">What are the stages of the recruitment process?</h2>
                <div class="faq-body">
                    <p>The following are the stages of recruitment:</p>
                    <ul type="bullet">
                        <li>Pre-placement discussion</li>
                        <li>Aptitude Test/Technical Test (Online/Pen and Paper) </li>
                        <li>Group Discussion</li>
                        <li>Technical Interviews / Domain interviews </li>
                        <li>Management round interviews </li>
                    </ul>
                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">What is an aptitude test?</h2>
                <div class="faq-body">
                    <ul>
                        <li>General aptitude consists of Quantitates, Logical, Reasoning and Verbal subjects
                        </li>
                        <li>Duration of the test varies, depending on the company.</li>
                        <li>Every company has set minimum marks section-wise or overall cut off for shortlisting
                            candidates.
                        </li>
                        <li>Some companies consider negative marking for the overall score ∙ Candidates
                            successful in the
                            aptitude test proceed to the next round of the selection process. </li>
                    </ul>
                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">Is there any pre-placement training organized by the University for the
                    students going
                    for campus placements?</h2>
                <div class="faq-body">
                    <p>Pre-placement training sessions start from the first semester onwards and go on till
                        eligible
                        students get placed within corporate organizations. Many of these programs are conducted
                        by Life
                        Skills trainers on subjects like Aptitude, Life Skills, Finishing School and Coding.
                    </p>
                </div>
            </div>
            <div class="faq_box">
                <h2 class="faq-page">Which are the companies that visit our campus?</h2>
                <div class="faq-body">
                    <p>You can visit the Placement webpage of Chandigarh University for the list of companies
                        visiting the
                        campus. </p>
                </div>
            </div>
        </section>
    </main>
    
    
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

        var faq = document.getElementsByClassName("faq-page");
        for (let i = 0; i < faq.length; i++) {
            faq[i].addEventListener("click", function () {
                /* Toggle between adding and removing the "activate" class,
                to highlight the button that controls the panel */
                this.classList.toggle("activate");
                /* Toggle between hiding and showing the activate panel */
                var body = this.nextElementSibling;
                if (body.style.display === "block") {
                    body.style.display = "none";
                } else {
                    body.style.display = "block";
                }
            });
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