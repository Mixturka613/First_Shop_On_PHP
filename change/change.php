<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="/css/style.css" />
     <script src="/scripts/menu.js " defer></script>
    <title>Document</title>
</head>
<body>

    <?php 
        include __DIR__ . "/../particals/header/header.php";
        include __DIR__ . "/../particals/menu/menu.php";
        include __DIR__ . "/../admin/admin__test.php";
    ?>
    

    <div class="container admin-container">


    <?php

    switch ($_GET["category"]) {
    case "books":
        include __DIR__ . "/books/books__forms.php";
        break;
    case "users":
        include __DIR__ . "/users/user__forms.php";
        break;
    case "authors":
        include __DIR__ . "/authors/authors__forms.php";
        break;
    }

    ?>

</body>
</html>