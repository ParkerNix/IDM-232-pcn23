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
    <div class="body">
        <h1 class="header">Add Recipe</h1>
        <form class="editing" action="../includes/process/create_appointments.php" method="POST">
            <div class="title">
                <h2>Title</h2>
                <input type="text" placeholder= "Title...">
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
    </div>
<?php include '../includes/footer.php' ?>
</body>
</html>
