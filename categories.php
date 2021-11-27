<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "Normalizer" href= "css/normalizer.css"/>
    <link rel= "stylesheet" href= "css/main.css"/>
    <title>Categories | Recipe & Me</title>
</head>
<body>
<?php include 'includes/header.php' ?>
    <div class="body">
        <h1 class="header">All Recipes</h1>
        <div class="list" id="categories">
            <div class="recipe1">
                <a href="breakfast.php">
                <img src="images/breakfast.png" alt="breakfast">
                <p>See recipes</p></a>
            </div>
            <div class="recipe2">
                <a href="lunch.php">
                <img src="images/lunch.png" alt="lunch">
                <p>See recipes</p></a>
            </div>
            <div class="recipe3">
                <a href="dinner.php">
                <img src="images/dinner.png" alt="dinner">
                <p>See recipes</p></a>
            </div>
            <div class="recipe4">
                <a href="vegan.php">
                <img src="images/vegan.png" alt="vegan">
                <p>See recipes</p></a>
            </div>
            <div class="recipe5">
                <a href="snacks.php">
                <img src="images/snacks.png" alt="snacks">
                <p>See recipes</p></a>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php' ?>
</body>
</html>
