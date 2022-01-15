<?php
function OpenConnection(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "meraki_database";
    $conn = new mysqli($dbhost , $dbuser, $dbpass, $db );
    
    if($conn->connect_error){
        die();
    }
     
    return $conn;

 }

