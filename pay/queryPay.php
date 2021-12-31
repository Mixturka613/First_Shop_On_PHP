<?php

include_once __DIR__ . "/../connectBD.php";

if(empty($_POST)) {
    die("ERROR: Пустой запрос");
}

$userID = $_POST['userID'];
$FIO = $_POST['FIO'];
$adress = $_POST['adress'];
$card = $_POST['card'];
$phone = $_POST['phone'];
$index = $_POST['index'];

$sql = "INSERT INTO orders (FIO, adress, card, phone, mailIndex) VALUES ( '$FIO', '$adress', '$card', '$phone', '$index')";

if ( !$connect->query($sql) ) {
    die("ERROR: Ошибка в запросе");
} else {
    $connect->query("DELETE FROM basket WHERE userID = $userID");
    header("Location: http://coolbook/");
}
