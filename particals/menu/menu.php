<?php 

include_once __DIR__ . "/../../authorisation/auth-test.php";
include_once __DIR__ . "/../../add/busketInfo.php";

?>

    <div class="menu" >
      <div class="menu__close">
        <span class="close"></span>
      </div>

      
        <div class="menu__content">
            
                <?php
                if ( empty($_COOKIE) ) {
                  include (__DIR__ . '/auth-page/auth-page.php');
                } else {
                  if ( !empty (getDataUser($_COOKIE['jwt-tocken']) ) ) {
                    include ( __DIR__ . '/user-page/user-page.php') ;
                  } else {
                    include (__DIR__ . '/auth-page/auth-page.php');
                  }
                }
                ?>
          
                <div class="menu__header">
                  <div class="menu__header">
                  <ul class="menu__header__inner">
                    <li class="header__link">
                      <a href="/" class="header__link__inner">Главная</a>
                    </li>

                    <li class="header__link">
                      <a href="/support.php" class="header__link__inner">Контакты</a>
                    </li>

                    <li class="header__link">
                      <a href="/about.php" class="header__link__inner">О нас</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="menu__basket">
                <a href="/basket.php" class="basket">
                    <img class="basket__img" src="/img/basket.png" alt="">
                    <h2 class="basket__text"><?php echo $basket['resultPrice'] ?> ₽</h2>
                </a>
            </div>

        </div>

  
    
    </div>