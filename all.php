<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "Normalizer" href= "css/normalizer.css"/>
    <link rel= "stylesheet" href= "css/main.css"/>
    <title>Home | Recipe & Me</title>
</head>
<body>
<?php include 'includes/header.php' ?>
<?php 
    include 'includes/config.php';
    include 'includes/database.php';
    include 'includes/helper.php';
    $reason = $_GET['reason'];
    $query = "SELECT * FROM recipes";
    $result = mysqli_query($db_connection, $query);
?>
    <div class="body">
        <h1 class="header">All Recipes</h1>
        <?php
        if ($result && $result->num_rows > 0) {
            include 'includes/process/allrecipes.php';
        } else {
            echo '<p>Oops! There are no recipes here.</p>';
        }
        ?>
    </div>
<?php include 'includes/footer.php' ?>
</body>
</html>
