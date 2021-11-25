<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "Normalizer" href= "../css/normalizer.css"/>
    <link rel= "stylesheet" href= "../css/main.css"/>
    <title>Home | Recipe & Me</title>
</head>
<body>
<?php include '../includes/header.php' ?>
<?php 
    include '../includes/config.php';
    include '../includes/database.php';
    $rid = $_GET['id']
    $query = "SELECT * FROM recipes WHERE id=" . $rid;
    $result = mysqli_query($db_connection, $query);
    if (!$result) {
        die ("Database query failed.");
    }
    echo "<pre>";
        while ($row = mysqli_fetch_array($result)) {
    var_dump($row['ingredients']);
    echo "<hr>";
    }
    echo "</pre>"?>
    <div class="body">
        <h1 class="header">Edit Recipe</h1>
        <form class="editing">
            <div class="title">
                <h2>Title</h2>
                <input type="text" placeholder= "Title..."></input>
            </div>
            <div class="description">
                <h2>Description</h2>
                <textarea class="type" rows="5" cols="60" name="description" placeholder= "This dish is..."></textarea>
            </div>
            <div class="ingredients">
                <h2>ingredients</h2>
                <textarea class="type" rows="5" cols="60" name="ingredients" placeholder= "1 cup of..."></textarea>
            </div>
            <div class="steps">
                <h2>Steps</h2>
                <textarea class="type" rows="5" cols="60" name="steps" placeholder="First..."></textarea>
            </div>
            <div class="upload">
                <h2>Upload Image</h2>
                <input type="file">
            </div>
            <input type="submit" value="Submit" class="submit">
        </form>
        <button class="submit" id="delete">Delete</button>
    </div>
<?php include '../includes/footer.php';
    mysqli_free_result($result); 
    ?>
</body>
</html>
