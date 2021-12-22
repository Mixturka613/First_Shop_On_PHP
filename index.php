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

    <div class="products-page">
      <div class="products-page__inner">
        <!-- Filters -->
        <div class="products-page__filters">
          <div class="filter">

            <?php include ('./particals/filters/filter.php'); ?>
            
          </div>
        </div>

        <!-- Contents -->
        <div class="products-page__contents">
          
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
            }

            
            
            
              
            
            ?>

            <div class="product__wrapper">
              <a href="books/?id=<?= $product["id"] ?>" class="product">
                <div class="product__inner">

                  <div class="product__img">
                    <img src="<?= $product["urlImg"] ?>" alt="" />
                  </div>

                  <div class="product__info">
                    <h2 class="product__name"><?= $product["name"] ?></h2>
                    <a href="author/?name=<?= $product["author"] ?>" class="product__author"><?= $product["author"] ?></a>
                  </div>

                </div>

              </a>
            </div>

          <?php }; ?>

        </div>
      </div>
    </div>
  </body>
</html>
