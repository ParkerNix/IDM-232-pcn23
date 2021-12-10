<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "Normalizer" href= "css/normalizer.css"/>
    <link rel= "stylesheet" href= "css/main.css"/>
    <title>Results | Recipe & Me</title>
    <?php 
    include 'includes/config.php';
    include 'includes/database.php';
    include 'includes/helper.php';
    $keyword = $_GET['keyword'];
    $query = 'SELECT * ';
    $query .= 'FROM recipes ';
    $query .= ' WHERE ';
    $query .= "`title` LIKE '%" . $keyword . "%'";
    $query .= "OR `description` LIKE '%" . $keyword . "%' ";
    $query .= "OR `ingredients` LIKE '%" . $keyword . "%' ";
    $query .= "OR `steps` LIKE '%" . $keyword . "%'";
    $result = mysqli_query($db_connection, $query);
?>
</head>
<body>
<?php include 'includes/header.php' ?>
    <div class="body">
        <h1 class="header">Search results for: <br> "<?php echo $keyword ?>"</h1>
        <?php
        if ($result && $result->num_rows > 0) {
            include 'includes/process/allrecipes.php';
        } else {
            echo '<p>Oops! There are no recipes here.</p>';
        }
        ?>
        </div>
    </div>
<?php include 'includes/footer.php' ?>
</body>
</html>
