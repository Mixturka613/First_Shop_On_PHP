<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="scripts/menu.js " defer></script>
    <title>Document</title>
  </head>
  <body>

      <?php
        include ('./particals/menu/menu.php');
        include __DIR__ . "/add/busketInfo.php";
      ?>

    <? 
        $dataUser=getDataUser($_COOKIE['jwt-tocken']);
    ?>

    <header class="header">
      <? include ('./particals/header/header.php');?>
    </header>

    <div class="container">
      <h1 class="about__title">Задайте вопрос</h1>
      <form method="POST" class="admin__forms">
        <input type="email" value="<? echo $dataUser->email; ?>" name="email" style="display: none;"/>
        <textarea placeholder="Ваш вопрос..." name="message"></textarea>
        <input type="submit" value="отправить" />
      </form>
    </div>
  </body>
</html>

<?php
    include __DIR__ . '/connectBD.php';
    if(!empty($_POST)) {
        
        if ( empty($_POST['message']) ) {
            echo "<script>alert('Ваше сообщение пусто')</script>";
            die();
        }

        $message = htmlentities( $connect->real_escape_string($_POST['message']) );
        $email = $_POST['email'];

        $sql = "INSERT INTO support (email, message) VALUES ('$email', '$message') ";

        if ( !$connect->query($sql) ) {
            echo "<script>alert('Запрос не успешен')</script>";
            die();
        } else {
            echo "<script>alert('Ваш запрос отправлен')</script>";
            
        }
    }
?>