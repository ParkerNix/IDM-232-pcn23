<?php
    include '../config.php';
    include '../database.php';


    $titleField = $_POST['title'];
    $descriptionField = $_POST['description'];
    $ingredientsField = $_POST['ingredients'];
    $stepsField = $_POST['steps'];
    $photoField = $_POST['photo'];
    $id = $_POST['id']
  
    $query = "UPDATE recipes SET ";
    $query .= "title = '{$title}', ";
    $query .= "img = '{$img}', ";
    $query .= "description = '{$description}' ";
    $query .= "WHERE id = {$id}";


    $db_connection->query($query);
?>