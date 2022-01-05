<?

include ('./product.php');
include ('./globalVariable.php');
// 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/range.css">
    <script src="particals/filters/filter.js" defer></script>
    <script src="/scripts/menu.js " defer></script>
    <script src="/particals/filters/range.js" defer></script>
    <title>CoolBook</title>
  </head>
  <body>

  <?php

  include (__DIR__ . '/particals/menu/menu.php');
  if(!empty($_COOKIE['jwt-tocken'])) {
    include_once __DIR__ . "/add/busketInfo.php";
  }
  ?>

  <div class="wrapper">

    <header class="header">
      <?php include (__DIR__ . '/particals/header/header.php');?>
    </header>
    
      <div class="shop container">

        <!-- Filters -->
        <section class="filter shop__filter">
          <? include ('./particals/filters/filter.php'); ?>
        </section>
        <!-- Filters end -->


        <!-- Contents -->
        <div class="contents shop__contents">
          <div class="shop__list">

          <?php
 
          $minPrice = isset( $_GET['priceMin'] ) ? htmlspecialchars ((int)$_GET['priceMin'] ) : null;
          $maxPrice = isset( $_GET['priceMax'] ) ? htmlspecialchars ((int)$_GET['priceMax'] ) : null;

          $filterGenres = $_GET['genre'];   
          
          foreach ($data as $products => $product) {

              if( isset($minPrice) and isset($maxPrice)) {   
                if($minPrice > $product["price"] and $maxPrice > $product["price"]) {
                  continue;
                } else {
                  if( !empty($filterGenres) and array_search($product['genre'], $filterGenres) === false) {
                    continue;
                  }            
                }
              }
          ?>

            <!-- SHOP ITEM -->

            <div class="shop__item product">
              <a href="/book.php/?id=<?= $product["id"] ?>">
                <div class="product__img">
                  <img
                    src="<?= $product["urlImg"] ?>"
                    alt=""
                  />
                </div>
              </a>

              <div class="product__info">
                <a href="/book.php/?id=<?= $product["id"] ?>" class="product__name"><?= $product["name"] ?></a>
                <a href="/author.php/?name=<?= $product["author"] ?>" class="product__author"><?= $product["author"] ?></a>
              </div>

              <span class="product__price"><?= $product["price"] ?> руб.</span>
            </div>

            <!-- SHOP ITEM END -->
            <?php }; ?>

          </div>  
        </div>
        <!-- SHOP LIST END -->
        <!-- Content END -->
      </div>

    </div>
      
  </body>
</html>
