<?php
    include '../config.php';
    include '../database.php';
    include '../helper.php';


    $titleField = mysqli_real_escape_string($db_connection, $_POST['title']);
    $descriptionField = mysqli_real_escape_string($db_connection, $_POST['description']);
    $ingredientsField = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $stepsField = mysqli_real_escape_string($db_connection, $_POST['steps']);
    $photoField = mysqli_real_escape_string($db_connection, $_POST['photo']);

    $query = "INSERT INTO `recipes`(`title`,`description`,`ingredients`,`steps`,`photo`)";
    $query .= "VALUES ('{$titleField}','{$descriptionField}','{$ingredientsField}','{$stepsField}','N/A')";

    $db_connection->query($query);
    redirectTo('https://parkerishere.com/IDM232/all.php?reason=success');
?>