<?php
    include '../config.php';
    include '../database.php';
    include '../helper.php';


    $titleField = $_POST['title'];
    $descriptionField = $_POST['description'];
    $ingredientsField = $_POST['ingredients'];
    $stepsField = $_POST['steps'];
    $photoField = $_POST['photo'];

    $query = "INSERT INTO `recipes`(`title`,`description`,`ingredients`,`steps`,`photo`)";
    $query .= "VALUES ('{$titleField}','{$descriptionField}','{$ingredientsField}','{$stepsField}','N/A')";

    $db_connection->query($query);
    redirectTo('/../all.php?reason=success');
?>