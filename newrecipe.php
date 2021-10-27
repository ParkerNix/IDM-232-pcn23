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
    <div class="body">
        <h1 class="header">All Recipes</h1>
        <div class="editing">
            <div class="title">
                <h2>Title</h2>
                <input type="text" placeholder= "Title...">
            </div>
            <div class="description">
                <h2>Description</h2>
                <input type="text" placeholder= "This dish is...">
            </div>
            <div class="ingredients">
                <h2>ingredients</h2>
                <input type="text" placeholder= "1 cup of...">
                <button id="adding">+</button>
                <button id="subing">-</button>
            </div>
            <div class="steps">
                <h2>Steps</h2>
                <input type="text" placeholder= "First...">
                <button id="addstep">+</button>
                <button id="substep">-</button>
            </div>
            <div class="upload">
                <h2>Upload Image</h2>
                <input type="file" placeholder="upload images here">
            </div>
        </div>
        <div class="submit">
            <button>Sumbit</button>
        </div>
    </div>
<?php include 'includes/footer.php' ?>
</body>
</html>
