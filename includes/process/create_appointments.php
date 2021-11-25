<?php
    include '../config.php';
    include '../database.php';

    $query = "INSERT INTO `recipes`(`title`, `description`, `ingredients`, `steps`, `photo`)";
    $query .= "VALUES ('a','b','c','d','e')";

    $db_connection->query($query);
?>