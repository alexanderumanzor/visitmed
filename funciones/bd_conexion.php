<?php

    
    $user = 'root';
    $password = '';
    $db = 'visitmed';
    $host = 'localhost';
    $port = 3306;

    $conn = mysqli_init();
    $success = mysqli_real_connect(
    $conn, 
    $host, 
    $user, 
    $password, 
    $db,
    $port
);

    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
   
?>