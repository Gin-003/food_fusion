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


    <!-- Recipe Section-->

    <section class="recipe" id="recipe">

        <h1 class="heading">Recipe Collections</h1>

        <div class="box-container">

            <div class="box" data-aos="fade-left">
                <img src="img/p1.jpg" alt="">
                <h3>Chicken Chowmin</h3>
                <div class="icons">
                    <a href="https://natashaskitchen.com/chicken-chow-mein/" class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=0DHodNO-AnI&t=17s" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p2.jpg" alt="">
                <h3>Hyderabadi Biryani</h3>
                <div class="icons">
                    <a href="https://www.hydbiryanigrill.com/" class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=3OSQdcVoXqo" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p3.jpg" alt="">
                <h3>Hilsha Curry</h3>
                <div class="icons">
                    <a href="https://www.licious.in/blog/recipe/hilsa-curry-the-flavour-of-bengal/"
                        class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=w0JYuG1wZT8" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p7.jpg" alt="">
                <h3>Ichiraku Ramen</h3>
                <div class="icons">
                    <a href="https://brannewdayanime.wordpress.com/2017/08/04/anime-recipe-how-to-make-ichiraku-ramen-from-naruto/"
                        class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=0py3YKRZSwE" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p10.jpg" alt="">
                <h3>Sushi Roll</h3>
                <div class="icons">
                    <a href="https://secretsofsushi.com/sushi-roll-recipes" class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=ll7bFxr-kag" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p12.jpeg" alt="">
                <h3>sizzling pancakes</h3>
                <div class="icons">
                    <a href="https://waitthatsgood.com/vietnamese-sizzling-pancakes-banh-xeo/"
                        class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=V8dhQQYvWR0" class="fab fa-youtube"></a>
                </div>
            </div>

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