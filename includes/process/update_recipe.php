<?php
    include '../config.php';
    include '../database.php';
    include '../helper.php';




    $titleField = mysqli_real_escape_string($db_connection, $_POST['title']);
    $descriptionField = mysqli_real_escape_string($db_connection, $_POST['description']);
    $ingredientsField = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $stepsField = mysqli_real_escape_string($db_connection, $_POST['steps']);
    $photoField = mysqli_real_escape_string($db_connection, $_POST['photo']);
    $rid = $_GET['id'];
  
    $query = "UPDATE `recipes` SET ";
    $query .= "`title` = '{$titleField}', ";
    $query .= "`description` = '{$descriptionField}', ";
    $query .= "`ingredients` = '{$ingredientsField}', ";
    $query .= "`steps` = '{$stepsField}' ";
    $query .= "WHERE id = {$rid}";

    $db_connection->query($query);

    redirectTo('https://parkerishere.com/IDM232/all.php?reason=editsuccess');
?>