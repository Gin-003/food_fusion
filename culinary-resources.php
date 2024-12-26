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
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

    <!-- Culinary Resources Section-->
    <section class="gallery" id="gallery">

        <h1>Culinary Resources</h1>
        <ul>
            <li class="list active" data-filter="All">All</li>
            <li class="list" data-filter="dessert">Dessert</li>
            <li class="list" data-filter="soup">Soup</li>
            <li class="list" data-filter="salad">Salad</li>
            <li class="list" data-filter="biryani">Biryani</li>
            <li class="list" data-filter="fastfood">FastFood</li>
        </ul>
        <div class="ps" data-aos="zoom-in">
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert1.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup1.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad1.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani1.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood1.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert2.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup2.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad2.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani2.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood2.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert3.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup3.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad3.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani3.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood3.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert4.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad4.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani4.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood4.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert6.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup4.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad5.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood5.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert7.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup5.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad6.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani5.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup6.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani7.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood7.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup7.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood8.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani6.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood9.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert8.jpg"></div>

        </div>
    </section>


    <!-- Footer -->
    <footer>
        <p>Food Fusion @ All Right Reserved!</p>
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

</body>

</html>