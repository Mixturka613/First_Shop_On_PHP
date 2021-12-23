<?php 

include ('./product.php');
include ('./globalVariable.php');
// <?php  var_dump($_GET) 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/<?= $path ?>/css/style.css" />
    <script src="/<?= $path ?>/particals/filters/filter.js" defer></script>
    <title>CoolBook</title>
  </head>
  <body>
    <header class="header">
      <? include ('./particals/header/header.php'); ?>
    </header>

    
      <div class="shop container">

        <!-- Filters -->
        <section class="filter shop__filter">
          <? include ('./particals/filters/filter.php') ?>
        </section>
        <!-- Filters end -->


        <!-- Contents -->
        <div class="contents shop__contents">
          <div class="shop__list">

          <?php
          
          $filterPrice = (int)$_GET["price"];
          $filterGenres = $_GET['genre'];   
          
          foreach ($data as $products => $product) {

            if($filterPrice !== 0) {
              if($filterPrice < $product["price"]) {
                continue;
              } else {
                if ($filterGenres !== NULL) {
                  if(array_search($product['genre'], $filterGenres) === false) {
                    continue;
                  }
                  
                }
              }
            } ?>

            <!-- SHOP ITEM -->

            <div class="shop__item product">
              <a href="book.php/?id=<?= $product["id"] ?>">
                <div class="product__img">
                  <img
                    src="<?= $product["urlImg"] ?>"
                    alt=""
                  />
                </div>
              </a>

              <div class="product__info">
                <a href="book/?id=<?= $product["id"] ?>" class="product__name"><?= $product["name"] ?></a>
                <a href="author/?name=<?= $product["author"] ?>" class="product__author"><?= $product["author"] ?></a>
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
      
  </body>
</html>
