<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $db_name = "loginphp";
    $conn = new mysqli($severname, $username, $password, $db_name, 4306);
    if(
        
        $conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>