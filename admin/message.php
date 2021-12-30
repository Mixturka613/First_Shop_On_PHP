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
    <header class="header">
      <?php include ( "../particals/header/header.php" ) ?>
    </header>

    <?php include __DIR__ . "/../particals/menu/menu.php" ?>

    <?php
        include __DIR__ . "/admin__test.php";
    ?>

    <div class="container">

        <h1 class="support__title">Messages</h1>

        <form method="POST" action="/admin/message/message__update.php">

            <div class="message__list">

            <?php 
                include __DIR__ . "/../connectBD.php";
                
                $sql = "select * from support";

                $messages = $connect->query($sql);

                foreach ($messages as $message) { ?>

                <div class="support__message">
                    <p class="support__id"><?= $message['id'] ?></p>
                    <p class="support__email">Email: <?= $message['email'] ?></p>
                    <p class="support__text"><?= $message['message'] ?></p>

                    <input class="support__checkbox" type="checkbox" name="active[]" value="<?= $message['id'] ?>" >
                </div>

                <?php } ?>

            </div>

            <input type="submit" value="Применить" class="default__btn">
        </form>

    </div>
</body>
</html>