<?php
    include '../config.php';
    include '../database.php';
    include '../helper.php';


    $rid = $_GET['id'];

    $query = "DELETE FROM `recipes` WHERE id='{$rid}'";

    $db_connection->query($query);
    redirectTo('/../all.php?reason=deletesuccess');
?>