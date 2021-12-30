<?php 

include ('./product.php');

$bookId = (int)$_GET['id'];
$data_about_book = [];
foreach ($data as $book) {
    if ((int)$book['id'] === $bookId) {
      $data_about_book = $book;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/book.css" />
    <script src="/scripts/menu.js " defer></script>
    <title></title>
  </head>
  <body>

    <?php
        include ('./particals/menu/menu.php');
        include __DIR__ . "/add/busketInfo.php";
    ?>

    <header class="header">
      <? include ('./particals/header/header.php'); ?>
    </header>

    <div class="book container">
      <div class="book__inner">
        <!-- IMG -->
        <div class="book__img">
          <img
            src="<?= $data_about_book["urlImg"] ?>"
            alt=""
          />
        </div>
        <!-- Img end -->
        <!-- Book content -->
        <div class="book__content">
          <h1 class="book__name"><?= $data_about_book["name"] ?></h1>
          <h2 class="book__author">
            Author: <a href="/author.php/?authorName=<?= $data_about_book["author"] ?>"><?= $data_about_book["author"] ?></a>
          </h2>

          <h2 class="book__price">Price: <?= $data_about_book["price"] ?>₽</h2>
          <form action="/add/addBasket.php" method="POST">
            <input type="text" style="display: none;" name="id" value="<?= $data_about_book['id']; ?>">
            <input type="submit" class="book__btn btn" value="Добавить в корзину" />
          </form>
          
        </div>
        <!-- Book content end -->
      </div>

      <hr class="line" />

      <section class="book__description">
        <h2 class="book__description-title">Описание</h2>
        <p class="text">
          <?= $data_about_book["description"] ?>
        </p>
      </section>

      <hr class="line" />

      <div class="book__comments">
        <h2 class="comment__title">Коментарии</h2>

        <form class="comment__create" action="/">
          <input
            type="text"
            name="newComment"
            placeholder="Оставьте комментарий"
            class="commet__input"
          />
          <input type="button" value="Send" class="comment__btn btn" />
        </form>

        <div class="comment__list">
          <!-- Comment -->

          <section class="comment__item comment">
            <!-- User IMG -->

            <div class="comment__user-img user-img">
              <img
                src="https://pchel.net/files/users/rusya-pirojok-1997519722000/portfolio/original/9646027_botogram.png"
                alt=""
              />
            </div>
            <!-- User IMG end -->

            <!-- User info -->

            <div class="comment__user-info">
              <h2 class="comment__user-name user-name">Nekita lox</h2>

              <p class="comment__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Laboriosam totam delectus atque suscipit nobis aliquid pariatur
                quam obcaecati nemo itaque reprehenderit nulla rerum vitae,
                maxime facilis, dolorem quidem veritatis modi!
              </p>
            </div>

            <!-- User info end -->
          </section>
        </div>
        <!-- Comment end -->
<!-- Comment -->

          <section class="comment__item comment">
            <!-- User IMG -->

            <div class="comment__user-img user-img">
              <img
                src="https://pchel.net/files/users/rusya-pirojok-1997519722000/portfolio/original/9646027_botogram.png"
                alt=""
              />
            </div>
            <!-- User IMG end -->

            <!-- User info -->

            <div class="comment__user-info">
              <h2 class="comment__user-name user-name">Nekita lox</h2>

              <p class="comment__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Laboriosam totam delectus atque suscipit nobis aliquid pariatur
                quam obcaecati nemo itaque reprehenderit nulla rerum vitae,
                maxime facilis, dolorem quidem veritatis modi!
              </p>
            </div>

            <!-- User info end -->
          </section>
        </div>
        <!-- Comment end --><!-- Comment -->

          <section class="comment__item comment">
            <!-- User IMG -->

            <div class="comment__user-img user-img">
              <img
                src="https://pchel.net/files/users/rusya-pirojok-1997519722000/portfolio/original/9646027_botogram.png"
                alt=""
              />
            </div>
            <!-- User IMG end -->

            <!-- User info -->

            <div class="comment__user-info">
              <h2 class="comment__user-name user-name">Nekita lox</h2>

              <p class="comment__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Laboriosam totam delectus atque suscipit nobis aliquid pariatur
                quam obcaecati nemo itaque reprehenderit nulla rerum vitae,
                maxime facilis, dolorem quidem veritatis modi!
              </p>
            </div>

            <!-- User info end -->
          </section>
        </div>
        <!-- Comment end -->


      </div>
    </div>
  </body>
</html>
