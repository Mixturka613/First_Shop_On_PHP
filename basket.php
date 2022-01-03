<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="scripts/menu.js " defer></script>
    <title>Document</title>
</head>
<body>
    smt..
    <?php
        if(empty( $_COOKIE['jwt-tocken'])) {
            die("Для этой страницы вы должны быть авторизованы");
        }

        include ('./particals/menu/menu.php');
        include_once __DIR__ . "/add/busketInfo.php";
    ?>

    <header class="header">
      <? include ('./particals/header/header.php'); ?>
    </header>

    <div class="container">

        <div class="busket__list">

        <?php 

            if(empty( $basket['elements'])) {
                die("Корзина пуста");
            }
            
            foreach ($basket['elements'] as $product) { $book = $product[0];  $bookID = $data[$book['id']]['id']; ;

               
            ?>  
                <div class="busket__item">

                    <div class="busket__img">
                        <img src="<?= $book['urlImg'] ?>" alt="">
                    </div>

                    <div class="busket__info">
                        <h2><?= $book['name'] ?></h2>
                        <p><?= $book['price'] ?>руб.</p>
                    </div>

                    <div class="busket__price">
                        <p>Количество: <?= $book['count'] ?></p>

                        <p>Цена: <?= $book['resultProduct'] ?>руб.</p>

                        
            
                            <!-- <input name="userID" type="text"  value="<?php echo $book['userID'] ?>" style="display: none;">
                            <input name="hello" value="<?php echo $bookID; ?>" type="hidden" />

                            <div class="busket__btn">
                                <input id="close" type="submit" name="change" style="display: none;" value="close" />
                                <label for="close">
                                    <img src="/img/close.png" alt="">
                                </label>
                            </div> -->

                       
                    </div>
                     </div>
                    
                <?php } ?>

                    

               
            </div>

            <h1>Итог: <?= $basket['resultPrice'] ?>руб.</h1>

            <form action="/pay/pay.php" method="POST">
                <input type="hidden" name="resultPrice" value="<? echo $basket['resultPrice']?>">
                <input type="hidden" name="userID" value="<? echo $basket['userID'] ?> " >
                <input type="submit" value="Оплатить" class="default__btn" <?php ($basket['resultPrice'] == 0 or empty($basket['resultPrice']) ? 'disabled' : '' ) ?> >
            </form>

    </div> 
    
</body>
</html>