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

$sql;

$newData = $connect->query("SELECT * FROM basket WHERE userID = $userID AND products = $idBook");

if( $newData->num_rows ) {
    $count;
    foreach ( $newData as $data) {
        $count = $data['count'];
    }
    $count += 1;

    $sql = "UPDATE basket SET userID = $userID, products = $idBook, count = $count WHERE userID = $userID AND products = $idBook" ;
} else {
    $sql = "INSERT INTO basket (userID, products, count) VALUES ($userID, $idBook, 1)";
}

$link = $_SERVER['HTTP_REFERER'];
if ( !$connect->query($sql)) {
    die("ERROR: Ошибка запроса");
} else {
    header("Location: $link");
}
