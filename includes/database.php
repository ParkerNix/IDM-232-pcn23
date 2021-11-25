<?php 
$db_connection = mysqli_connect(
    $host, 
    $user, 
    $password,
    $db_database_name);

if (!$db_connection) {
  echo "Faliure (awwwww): " . mysqli_connect_error();
  exit();
}
?>