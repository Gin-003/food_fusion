<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Food Fusion - Community Cookbook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
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

    <!-- Community Cookbook Section -->
    <section class="community-cookbook" id="community-cookbook">
        <h1 class="heading">Community Cookbook</h1>

        <?php if (isset($_SESSION['username'])): ?>
            <div class="add-recipe-btn" data-aos="fade-up">
                <a href="#" class="btn" onclick="showAddRecipeForm()">Share Your Recipe</a>
            </div>
        <?php endif; ?>

        <div class="recipe-grid" data-aos="fade-up">
            <!-- Recipe submission form (hidden by default) -->
            <div id="recipe-form" style="display: none;" class="recipe-form">
                <form action="submit-recipe.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="recipe_title" placeholder="Recipe Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="ingredients" placeholder="Ingredients (one per line)" required></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="instructions" placeholder="Cooking Instructions" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="recipe_image" accept="image/*">
                    </div>
                    <div class="form-group">
                        <select name="category" required>
                            <option value="">Select Category</option>
                            <option value="appetizer">Appetizer</option>
                            <option value="main-course">Main Course</option>
                            <option value="dessert">Dessert</option>
                            <option value="beverage">Beverage</option>
                        </select>
                    </div>
                    <button type="submit" class="btn">Submit Recipe</button>
                </form>
            </div>

            <!-- Recipe display grid -->
            <!-- Recipe display grid -->
            <div class="recipes-container">
                <?php
                // Mock recipe data (temporary)
                $mockRecipes = [
                    [
                        'id' => 1,
                        'title' => 'Homemade Pizza',
                        'author' => 'John Doe',
                        'date' => '2024-03-15',
                        'category' => 'Main Course',
                        'image' => 'img/recipes/pizza.jpg',
                        'likes' => 24,
                        'description' => 'A delicious homemade pizza with fresh ingredients and a crispy crust.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Chocolate Chip Cookies',
                        'author' => 'Jane Smith',
                        'date' => '2024-03-14',
                        'category' => 'Dessert',
                        'image' => 'img/recipes/cookies.jpg',
                        'likes' => 36,
                        'description' => 'Classic chocolate chip cookies that are crispy on the outside and chewy on the inside.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Garden Fresh Salad',
                        'author' => 'Mary Johnson',
                        'date' => '2024-03-13',
                        'category' => 'Appetizer',
                        'image' => 'img/recipes/salad.jpg',
                        'likes' => 18,
                        'description' => 'A refreshing salad made with seasonal vegetables and homemade vinaigrette.'
                    ],
                    [
                        'id' => 4,
                        'title' => 'Spicy Chicken Curry',
                        'author' => 'Mike Wilson',
                        'date' => '2024-03-12',
                        'category' => 'Main Course',
                        'image' => 'img/recipes/curry.jpg',
                        'likes' => 42,
                        'description' => 'A flavorful curry dish with tender chicken and aromatic spices.'
                    ]
                ];

                // Display mock recipes
                foreach ($mockRecipes as $recipe) {
                    echo '
                        <div class="recipe-card" data-aos="fade-up">
                            <div class="recipe-image">
                                <img src="' . $recipe['image'] . '" alt="' . $recipe['title'] . '">
                                <div class="category-tag">' . $recipe['category'] . '</div>
                            </div>
                            <div class="recipe-content">
                                <h3>' . $recipe['title'] . '</h3>
                                <p class="author">By ' . $recipe['author'] . ' • ' . date('M d, Y', strtotime($recipe['date'])) . '</p>
                                <p class="description">' . $recipe['description'] . '</p>
                                <div class="recipe-footer">
                                    <span class="likes"><i class="fas fa-heart"></i> ' . $recipe['likes'] . '</span>
                                    <a href="#" class="view-recipe">View Recipe</a>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>Food Fusion @ All Right Reserved!</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 60,
            once: false,
            duration: 2000,
            useClassNames: false,
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,
        });

        function showAddRecipeForm() {
            const form = document.getElementById('recipe-form');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>

</html>