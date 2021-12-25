<?php 

include ('./globalVariable.php');
include ('./authorisation/auth-test.php');

?>

    <div class="menu">
      <div class="menu__close">
        <span class="close"></span>
      </div>

      
        <div class="menu__content">
            
                <?php
                if ( empty($_COOKIE) ) {
                  include ('./particals/menu/auth-page/auth-page.php');
                } else {
                  if ( !empty (getDataUser($_COOKIE['jwt-tocken']) ) ) {
                    include ('./particals/menu/user-page/user-page.php') ;
                  } else {
                    include ('./particals/menu/auth-page/auth-page.php');
                  }
                }
                ?>
        </div>
    
    </div>