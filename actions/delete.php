<?php 
    include("db.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM 'todo' WHERE id = '$id'";
    $val = $db -> query($sql);
    if($val){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    $connection->close();
    ?>
