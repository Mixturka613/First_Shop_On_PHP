<?php

// Подключение модуля jwt
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
require_once('../vendor/autoload.php');

// Подтягиваем данные
include ('../connectBD.php');
include ('../globalVariable.php');

$email = $_POST['email'];
$password = $_POST['password'];

if ( empty($email) and empty($password) ) {
    echo "Пароль или email пуст";
    die();
}

$searchEmail = "select * from users where email = '$email'";
$testEmail = mysqli_query($connect, $searchEmail);

if ($testEmail->num_rows === 0) {
    echo "Такой email не существует";
    die();
}

$sql = "select password, username from users where email = '$email'";
$dataAboutUser = mysqli_query($connect, $sql);

$newdata;
while ($row = mysqli_fetch_assoc($dataAboutUser))
{ 
    $newdata = $row;
}

// Проверка пароля
$testPassword = password_verify($password, $newdata['password']);

if (!$testPassword) {
    echo "Не правильный пароль";
    die();
}

$payload = array(
    "username" => $newdata['username'],
    "email" => $email,
);

$jwt = JWT::encode($payload, $key, 'HS256');

setcookie("jwt-tocken", $jwt, time()+(60*60*60), '/coolbook');
return header('Location: http://localhost/coolbook/');

 
?>