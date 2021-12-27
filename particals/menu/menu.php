<?php 

$ds = DIRECTORY_SEPARATOR;
include (realpath ( dirname(__FILE__) . $ds . "../..") . $ds . "authorisation\auth-test.php");

?>

    <div class="menu">
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
        </div>
    
    </div>