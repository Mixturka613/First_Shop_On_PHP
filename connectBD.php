<?php 

    define("DB_HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PASSWORD", 'root');
    define("DB_NAME", 'coolbook_bd');

    $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($connect == false) {
         die("Connection failed: " . mysqli_connect_error());
    }
    
?>