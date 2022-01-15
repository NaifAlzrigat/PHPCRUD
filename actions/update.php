<?php 
    include("db.php");
    if(isset($_POST["update"])) {
        $id = (int)$_POST["idUpdate"];
        $todo = htmlspecialchars($_POST["todo"]);
        $description  = htmlspecialchars($_POST["description "]);
     
        $sql = "UPDATE task SET todo='$todo', description = '$description' WHERE id = '$id'";
        $val = $db -> query($sql);
        if($val) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    $connection->close();

    ?>