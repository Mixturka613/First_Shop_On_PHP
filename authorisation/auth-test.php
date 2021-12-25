<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
include('./vendor/autoload.php');

// Подтягиваем отсюда ключ для jwt
// include ('./globalVariable.php');



function getDataUser($jwt) {
    $decoded = JWT::decode($jwt, "HELLOWORLD", ['HS256']);
    return $decoded;
}


?>