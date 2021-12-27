<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$ds = DIRECTORY_SEPARATOR;
include ( realpath ( dirname(__FILE__) . $ds . "..") . $ds . "vendor/autoload.php" );

// include __DIR__ . "/../vendor/autoload.php";

// Подтягиваем отсюда ключ для jwt
include ( realpath ( dirname(__FILE__) . $ds . "..") . $ds . "globalVariable.php" );


function getDataUser($jwt) {
    $decoded = JWT::decode($jwt, "HELLOWORLD", ['HS256']);
    return $decoded;
}


?>