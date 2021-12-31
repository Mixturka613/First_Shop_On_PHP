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

        <h1 class="support__title">Orders</h1>

        <form method="POST" action="/admin/orders/order__update.php">

            <div class="message__list">

            <?php 
                include __DIR__ . "/../connectBD.php";
                
                $sql = "select * from orders";

                $orders = $connect->query($sql);

                foreach ($orders as $order) { ?>

                <div class="support__message">
                    <p class="support__id"><?= $order['id'] ?></p>
                    <p class="support__email">Email: <?= $order['adress'] ?></p>
                    <p class="support__text">
                        Заказ на имя: <?= $order['id'] ?>
                        <br>
                        Карта: <?= $order['card'] ?>
                        <br>
                        Телефон: <?= $order['phone']?>
                        <br>
                        Почтовый индекс: <?= $order['mailIndex'] ?>
                    </p>

                    <input class="support__checkbox" type="checkbox" name="active[]" value="<?= $order['id'] ?>" >
                </div>

                <?php } ?>

            </div>

            <input type="submit"style="margin-top: 20px; border-radius: 5px;" value="Применить" class="default__btn">
        </form>

    </div>
</body>
</html>