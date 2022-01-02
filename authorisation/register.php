<?php

// Подключение модуля jwt
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
require_once('../vendor/autoload.php');

// Подтягиваем данные
include __DIR__ . '/../connectBD.php';
include ('../globalVariable.php');

$username = (string)htmlentities ($connect->real_escape_string($_POST['username']) );
$email = htmlentities ($connect->real_escape_string( $_POST['email'] ) );
$password = htmlentities ($connect->real_escape_string( $_POST['password'] ) );
$rPassword = htmlentities ($connect->real_escape_string ($_POST['passwordRepeat'] ) );

if ( !empty($email) and !empty($password) and !empty($rPassword) and !empty($username)) {

    if ( $password !== $rPassword) {
        echo "Пароли не совпадают";
        die();
    }

    $searchEmail = "select * from users where email = '$email'";
    $testEmail = mysqli_query($connect, $searchEmail);

    if ($testEmail->num_rows !== 0) {
        echo "Такой email уже существует";
        die();
    }

    // Хеширование пароля
    $hash_password = (string)password_hash($password, PASSWORD_BCRYPT);

    // Код отправки данных в бд
    $sql = "INSERT INTO users (email,password, username, admin) VALUES( '$email', '$hash_password', '$username', FALSE)";
    $save = $connect->query($sql);
    // Genrate JWT token
    $payload = array(
        "username" => $username,
        "email" => $email,
        "admin" => FALSE,
    );

    $jwt = JWT::encode($payload, $key, 'HS256');

    if ($save) {
    	$link = $_SERVER['HTTP_REFERER'];
        setcookie("jwt-tocken", $jwt, time()+(60*60*60), '/');
        return header("Location: $link");
    }
    else {
        echo "Что-то пошло не так";
    }

} else {
   echo "Что-то пошло не так1";
}

?>

<!-- $2y$10$MubZ2.YZQCYLnLGoa0.Ts.hcLSaQ2WSE6VbEhcMLvRaQ92qRCkcrG -->

<!-- password_verify -->

<!-- mysqli_result Object ( [current_field] => 0 [field_count] => 4 [lengths] => [num_rows] => 0 [type] => 0 ) -->

<!-- mysqli_result Object ( [current_field] => 0 [field_count] => 4 [lengths] => [num_rows] => 1 [type] => 0 ) -->