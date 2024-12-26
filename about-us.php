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


    <!-- About Us Section-->
    <section class="about" id="about">

        <h1>About Us</h1>

        <div class="row">

            <div class="image" data-aos="fade-right">
                <img src="img/mmmmm.png" alt="">
            </div>

            <div class="content" data-aos="fade-up">
                <p>We are two undergrad students majoring in Computer Science and Engineering. My friend and I share
                    some common interests that include hanging out to different restaurants in the town, checking out
                    different cuisines, talking hours and hours about food, and sometimes writing reviews on them on
                    social media platforms. These reviews were primarily intended for the fellow foodies. Still, they
                    were being appreciated by anyone who would read them, and many of the restaurant owners suggested
                    that we try their food and review them. Some of our friends and relatives would also read them and
                    suggest that we keep copies of these writings. So the idea was already at the back of our heads. But
                    it started kicking when we got the "Web Programming" course, and we were assigned a task to create a
                    website on something of our interest. So, we decided to team up instantly, and no wonder the idea
                    was already there! </p>
                <div class="up"></div>
                <a href="#"><button class="btn">learn more</button></a>
            </div>


        </div>
        <h1 class="ser">Our Services</h1>
        <div class="box-container">

            <div class="box">
                <img src="img/icon/chef.svg" alt="">
                <h3>Recipe</h3>
                <p>We offer recipes and cooking advice for Everyone.We are here to help you cook delicious meals with
                    less stress and more joy.</p>
            </div>

            <div class="box">
                <img src="img/icon/articles.svg" alt="">
                <h3>Article</h3>
                <p>We give the articles of any recipe.By reading our articles,people can easily learn basic skills of
                    cooking.People will get a lot of advantages by reading the articles because it will increase their
                    cooking skills.</p>
            </div>

            <div class="box">
                <img src="img/icon/review.svg" alt="">
                <h3>Review</h3>
                <p>We give the food reviews of any good restaurant.We try our best not to forget to write a review,
                    Especially when satisfied with the service and food in a restaurant.</p>
            </div>

            <div class="box">
                <img src="img/icon/quality.svg" alt="">
                <h3>Premium Membership</h3>
                <p>We provide live cooking courses.We have our premium membership.So people can learn cooking by
                    joining our live classes.</p>
            </div>

            <div class="box">
                <img src="img/icon/camera.svg" alt="">
                <h3>Food Photography</h3>
                <p>we provide food photography for restaurants.If a restaurant wants to highlight their featured
                    recipe,it can hire us for the photoshoot.after the photoshoot we highlight those Photo in our
                    gallery section.</p>
            </div>

            <div class="box">
                <img src="img/icon/earphones.svg" alt="">
                <h3>24x7 Support</h3>
                <p>We provide the best user support to our valued users, and We offer 24/7 support.They will get help
                    and will find answers to questions as soon as possible. </p>
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