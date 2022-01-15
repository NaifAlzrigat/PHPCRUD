<?php

require_once('../connection/connection.php');

$connection = OpenConnection();

if(isset($_POST['create'])){

    $todo = $_POST['todo'];
    $description = $_POST['description'];
    
    $connection->query("INSERT INTO `crud` (`todo`, `description`) VALUES ('$todo', '$description')");

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

$connection->close();
?>

