<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "Normalizer" href= "css/normalizer.css"/>
    <link rel= "stylesheet" href= "css/main.css"/>
    <?php 
    include 'includes/config.php';
    include 'includes/database.php';
    include 'includes/helper.php';
    $rid = $_GET['id'];
    $query = "SELECT * FROM recipes WHERE id=" . $rid;
    $result = mysqli_query($db_connection, $query);
    if (!$result) {
        redirectTo('all.php?reason=failedQuery');
    }
    if ($result && $result->num_rows > 0) {
        $row = mysqli_fetch_array($result);
    } else {
        redirectTo('all.php?reason=noRecipe');
    }?>
    <title><?php echo $row['title'];?> | Recipe & Me</title>
</head>
<body>
<?php include 'includes/header.php' ?>
    <div class="body">
        <div class="dish">
            <div class="dishimg">
                <img src="images/grilledcheese.jpg" alt="grilled cheese">
            </div>
            <div class="dishtext">
                <h1><?php echo $row['title'];?></h1>
                <p><?php echo $row['description'];?></p>
            </div>
        </div>
        <div class="recipe">
            <div class="ingredients">
                <h2>Ingredients</h2>
                <p><?php echo $row['ingredients'];?></p>
            </div>
            <div class="steps">
                <h2>Steps</h2>
                <p><?php echo $row['steps'];?></p>
                <a href="recipes/edit.php?id=<?php echo $row[id];?>"><p>Edit</p></a>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php' ?>
</body>
</html>
