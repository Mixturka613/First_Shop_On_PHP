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
        include __DIR__ . "/../particals/menu/menu.php";
        include __DIR__ . "/../connectBD.php";
        include_once __DIR__ . "/../add/busketInfo.php";
    ?>

    <header class="header">
      <? include (__DIR__ . '/../particals/header/header.php'); ?>
    </header>
    

    <div class="container">
        <h1>Общая сумма заказа: <?php echo $_POST['resultPrice'] ?>руб.</h1>

        <form action="/pay/queryPay.php" method="POST" class="pay__form">

            <input type="hidden" name="userID" value="<? echo $_POST['userID'] ?>">

            <input class="pay__input" name="FIO" type="text" placeholder="ФИО" required>
            <input class="pay__input" name="adress" type="text" placeholder="Адрес" required>
            
            <input class="pay__input" name="card" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>

            <input class="pay__input" type="text" name="phone" placeholder="Номер телефона" required>

            <input class="pay__input" name="index" type="number" placeholder="Индекс">

            <input class="default__btn" type="submit" value="Оплатить">

        </form>


    </div>
</body>
</html>