<?php

include ('./globalVariable.php')

?>


    <div class="header__inner">

        <div class="header__logo">
                <a href="/<?= $path ?>/index.php" class="logo">
                    <img class="logo__icon" src="/<?= $path ?>/img/icon.png" alt="">
                    <h2 class="logo__text">CoolBooks</h2>
                </a>
        </div>

        <div class="header__middle__side">
          <ul class="header__middle__side__inner">
            <li class="header__link">
              <a href="/" class="header__link__inner">Новинки</a>
            </li>

            <li class="header__link">
              <a href="/" class="header__link__inner">Контакты</a>
            </li>

            <li class="header__link">
              <a href="/" class="header__link__inner">Популярные</a>
            </li>
          </ul>
        </div>


        <div class="header__right__side">   

            <div class="header__basket">
                <a href="/<?= $path ?>/basket.php" class="basket">
                    <img class="basket__img" src="/<?= $path ?>/img/basket.png" alt="">
                    <h2 class="basket__text">0 ₽</h2>
                </a>
            </div>

            <div class="header__user">
                <a class="header__user__link">
                    <img class="header__user__img" src="/<?= $path ?>/img/user.png" alt="">
                </a>
            </div>
                
        </div>
            

    </div>
