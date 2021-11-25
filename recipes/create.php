<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "Normalizer" href= "../css/normalizer.css"/>
    <link rel= "stylesheet" href= "../css/main.css"/>
    <title>Create | Recipe & Me</title>
</head>
<body>
<?php require_once '../includes/config.php';
    require_once '../includes/database.php'?>
<?php include '../includes/header.php' ?>
    <div class="body">
        <div class="feature">
            <div class="featimg">
                <a href="../details.php"><img src="../images/grilledcheese.jpg" alt="grilled cheese"></a>
            </div>
            <div class="feattext">
                <h1>Ooey-Gooey Grilled Cheese</h1>
                <p>Looking for a dish you can make for lunch that won’t 
                    take hours and doesn’t cost you an arm and a leg? This dish has you covered.</p>
                <a href="../details.php"><p>Go to recipe ></p></a>
            </div>
        </div>
        <div class="menu">
            <div class="categories">
                <h2>Categories</h2>
                <a href="../categories.php"><img src="../images/categories.png" alt="categories"></a>
            </div>
            <div class="all">
                <h2>All Recipes</h2>
                <a href="../all.php"><img src="../images/all.png" alt="all recipes"></a>
            </div>
            <div class="random">
                <h2>Random Recipe</h2>
                <a href="#"><img src="../images/random.png" alt="random"></a>
            </div>
        </div>
    </div>
<?php include '../includes/footer.php' ?>
</body>
</html>
