<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Educational Resources - Food Fusion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
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

    <!-- Educational Resources Section -->
    <section class="educational-resources" id="educational-resources">
        <div class="section-header" data-aos="fade-down">
            <h1 class="heading">Educational Resources</h1>
            <p class="subtitle">Enhance your culinary journey with our carefully curated learning materials</p>
        </div>

        <div class="resources-container">
            <!-- Featured Resource -->
            <div class="featured-resource" data-aos="fade-up">
                <div class="featured-content">
                    <h2>Featured Resource</h2>
                    <h3>Master Class: Complete Cooking Fundamentals</h3>
                    <p>Start your culinary journey with our comprehensive guide covering everything from knife skills to
                        advanced cooking techniques.</p>
                    <a href="downloads/master-class.pdf" class="btn featured-btn">
                        <i class="fas fa-download"></i> Download Now
                    </a>
                </div>
                <div class="featured-image">
                    <img src="img/featured-resource.jpg" alt="Master Class">
                </div>
            </div>

            <!-- Downloadable Resources -->
            <div class="resource-category" data-aos="fade-up">
                <h2><i class="fas fa-book-reader"></i> Learning Materials</h2>
                <div class="resource-grid">
                    <div class="resource-item">
                        <div class="resource-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <h3>Cooking Techniques Guide</h3>
                        <p>A comprehensive guide to basic and advanced cooking techniques.</p>
                        <div class="resource-meta">
                            <span><i class="fas fa-file-alt"></i> PDF Format</span>
                            <span><i class="fas fa-clock"></i> 25 Pages</span>
                        </div>
                        <a href="downloads/cooking-techniques.pdf" class="btn">
                            <i class="fas fa-download"></i> Download
                        </a>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-file-download"></i>
                        <h3>Kitchen Safety Manual</h3>
                        <p>Essential safety guidelines for home cooking.</p>
                        <a href="downloads/safety-manual.pdf" class="btn">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Infographics -->
            <div class="resource-category infographics-section" data-aos="fade-up">
                <h2><i class="fas fa-chart-bar"></i> Infographics</h2>
                <div class="infographics-grid">
                    <div class="infographic-item">
                        <div class="infographic-image">
                            <img src="img/infographic-1.jpg" alt="Cooking Methods">
                            <div class="overlay">
                                <a href="img/infographic-1.jpg" class="btn download-btn" download>
                                    <i class="fas fa-download"></i> Download
                                </a>
                                <a href="img/infographic-1.jpg" class="btn preview-btn">
                                    <i class="fas fa-eye"></i> Preview
                                </a>
                            </div>
                        </div>
                        <div class="infographic-info">
                            <h3>Cooking Methods Explained</h3>
                            <p>A visual guide to different cooking techniques and their best uses</p>
                            <div class="info-meta">
                                <span><i class="fas fa-file-image"></i> PNG Format</span>
                                <span><i class="fas fa-expand"></i> High Resolution</span>
                            </div>
                        </div>
                    </div>

                    <div class="infographic-item">
                        <div class="infographic-image">
                            <img src="img/infographic-2.jpg" alt="Ingredient Substitutions">
                            <div class="overlay">
                                <a href="img/infographic-2.jpg" class="btn download-btn" download>
                                    <i class="fas fa-download"></i> Download
                                </a>
                                <a href="img/infographic-2.jpg" class="btn preview-btn">
                                    <i class="fas fa-eye"></i> Preview
                                </a>
                            </div>
                        </div>
                        <div class="infographic-info">
                            <h3>Common Ingredient Substitutions</h3>
                            <p>Quick reference guide for ingredient alternatives in your recipes</p>
                            <div class="info-meta">
                                <span><i class="fas fa-file-image"></i> PNG Format</span>
                                <span><i class="fas fa-expand"></i> High Resolution</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Tutorials with Enhanced Layout -->
            <div class="resource-category videos-section" data-aos="fade-up">
                <h2><i class="fas fa-play-circle"></i> Video Tutorials</h2>
                <div class="video-grid">
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/G-Fg7l7G1zw" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-info">
                            <h3>Basic Knife Skills</h3>
                            <p>Master the fundamental knife techniques every chef should know</p>
                            <div class="video-meta">
                                <span><i class="fas fa-clock"></i> 15 mins</span>
                                <span><i class="fas fa-level-up-alt"></i> Beginner</span>
                            </div>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/UmqsoFsDL4c" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-info">
                            <h3>Meal Prep Basics</h3>
                            <p>Learn the basics of meal preparation</p>
                            <div class="video-meta">
                                <span><i class="fas fa-clock"></i> 10 mins</span>
                                <span><i class="fas fa-level-up-alt"></i> Beginner</span>
                            </div>
                        </div>
                    </div>
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