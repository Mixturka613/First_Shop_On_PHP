<?php

include __DIR__ . "/../authorisation/auth-test.php";
include __DIR__ . "/../connectBD.php";

$emailUser = getDataUser($_COOKIE['jwt-tocken'])->email;

if(empty($emailUser)) {
    die("Вы не авторизованы");
}

$data = $connect->query("SELECT id FROM users WHERE email = '$emailUser'");

$userID;
foreach ($data as $id) {
    $userID = $id['id'];
}

$idBook = $_POST['id'];

if(empty($idBook)) {
    die("ERROR: id книги не указан");
}

// if( SELECT COUNT(*) FROM `basket` WHERE userID = $userID )` 

$sql = "INSERT INTO basket (userID, products) VALUES ($userID, $idBook)";

if ( !$connect->query($sql)) {
    die("ERROR: Ошибка запроса");
} else {
    header("Location: http://coolbook/book.php/?id=" . $idBook);
}