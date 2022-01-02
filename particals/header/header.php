
<div class="header__inner">

        <div class="header__logo">
                <a href="/index.php" class="logo">
                    <img class="logo__icon" src="/img/icon.png" alt="">
                    <h2 class="logo__text">CoolBooks</h2>
                </a>
        </div>

        <div class="header__middle__side">
          <ul class="header__middle__side__inner">
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

        <div class="menu__btn">
              <span class="menu__btn__line"></span>
        </div>

        <div class="header__right__side">   

            <div class="header__basket">
                <a href="/basket.php" class="basket">
                    <img class="basket__img" src="/img/basket.png" alt="">
                    <h2 class="basket__text"><?php echo $basket['resultPrice']; ?> ₽</h2>
                </a>
            </div>

            <div class="header__user">
                <a class="header__user__link">
                    <img class="header__user__img" src="/img/user.png" alt="">
                </a>
            </div>
                
        </div>
        
            

    </div>