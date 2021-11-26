<?php
    include '../config.php';
    include '../database.php';
    include '../helper.php';




    $titleField = $_POST['title'];
    $descriptionField = $_POST['description'];
    $ingredientsField = $_POST['ingredients'];
    $stepsField = $_POST['steps'];
    $photoField = $_POST['photo'];
    $rid = $_GET['id'];
  
    $query = "UPDATE `recipes` SET ";
    $query .= "`title` = '{$titleField}', ";
    $query .= "`description` = '{$descriptionField}', ";
    $query .= "`ingredients` = '{$ingredientsField}', ";
    $query .= "`steps` = '{$stepsField}' ";
    $query .= "WHERE id = {$rid}";

    echo $query;

    $db_connection->query($query);

    redirectTo('../../all.php?reason=editsuccess')
?>