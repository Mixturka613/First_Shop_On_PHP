<?php 

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "coolbook_bd");

    $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($connect == false) {
        $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);
        $connect->query("CREATE DATABASE coolbook_bd");
        echo "Обновите страницу";
    }
    
?>