<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Food Fusion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 1rem;
            text-align: center;
            z-index: 9999;
            display: none;
        }

        .cookie-consent button {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            margin-left: 1rem;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>

        <a href="#" class="logo"><img src="img/logo1.jpg" alt="logo">
        </a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="recipe-collection.php">Recipe Collection</a>
            <a href="community-cookbook.php">Community Cookbook</a>
            <a href="culinary-resources.php">Culinary Resources</a>
            <a href="educational-resources.php">Educational Resources</a>
            <a href="about-us.php">About Us</a>
            <a href="contact-us.php">Contact Us</a>
            <?php
            if (isset($_SESSION['username'])) {
                echo '<div class="dropdown">
                <button class="dropbtn">
                    ' . $_SESSION['username'] . '
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div>
            </div>';
            } else {
                echo '<a href="sign.php">Sign Up</a>';
            }
            ?>
        </nav>

    </header>

    <!-- Home Page Section-->

    <section class="home" id="home">
        <div class="video-container">
            <video src="img/v1.mp4" type="video/mp4" autoplay loop muted class="vid"></video>
        </div>

        <div class="content">
            <h1>Welcome To Food Fusion</h1>
            <p>A Complete Food Related Website Along With Various Different Culture Foods of various Categroies.Also
                There Are Various Food Recipes, Articles,Video Tutorials</p>
        </div>

    </section>

    <!-- Contact Us-->
    <section class="contact" id="contact">

        <h1 class="heading">contact us</h1>

        <div class="Full">

            <div class="image" data-aos="fade-right">
                <img src="img/box.jpg" alt="">
            </div>

            <form action="" data-aos="fade-left">

                <div class="inputBox">
                    <h3>full name</h3>
                    <input type="text" placeholder="enter your name">
                </div>

                <div class="inputBox">
                    <h3>email</h3>
                    <input type="email" placeholder="enter your email">
                </div>

                <div class="inputBox">
                    <h3>Subject</h3>
                    <input type="text" placeholder="enter subject">
                </div>

                <div class="inputBox">
                    <h3>message</h3>
                    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
                </div>

                <input type="submit" value="send" class="btn">

            </form>
        </div>
        <div class="box-container">

            <div class="box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3817.8661414359935!2d96.14601707539245!3d16.882514983921038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDUyJzU3LjEiTiA5NsKwMDgnNTQuOSJF!5e0!3m2!1smy!2smm!4v1735200446320!5m2!1smy!2smm"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="box">
                <h3>contact details</h3>
                <p> <i class="fas fa-phone"></i>+95767793771</p>
                <p> <i class="fas fa-envelope"></i>foodfusion@gmail.com</p>
                <p> <i class="fas fa-map-marker-alt"></i>Yangon</p>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <div class="up">
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Add before footer -->
    <div class="cookie-consent" id="cookieConsent">
        <p>
            We use cookies to improve your experience. By using our site, you agree to our
            <a href="privacy-policy.php" style="color: #4CAF50;">Privacy Policy</a> and
            <a href="cookie-policy.php" style="color: #4CAF50;">Cookie Policy</a>.
        </p>
        <button onclick="acceptCookies()">Accept</button>
    </div>

    <!-- Footer -->
    <footer>
        <p>
            Food Fusion @ All Right Reserved! |
            <a href="privacy-policy.php">Privacy Policy</a> |
            <a href="cookie-policy.php">Cookie Policy</a>
        </p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/gallary.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 60, once: false, duration: 2000,
            useClassNames: false,
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,
        });
    </script>

    <!-- Add before closing body tag -->
    <script>
        // Cookie consent functionality
        function setCookie(name, value, days) {
            let expires = "";
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function acceptCookies() {
            setCookie('cookieConsent', 'accepted', 365);
            document.getElementById('cookieConsent').style.display = 'none';
        }

        // Show cookie consent if not previously accepted
        window.onload = function () {
            if (!getCookie('cookieConsent')) {
                document.getElementById('cookieConsent').style.display = 'block';
            }
        }
    </script>

</body>

</html>