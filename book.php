<?php 

include ('./product.php');
include ('./globalVariable.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/<?= $path ?>/css/style.css" />
    <link rel="stylesheet" href="/<?= $path ?>/css/book.css" />
    <title></title>
  </head>
  <body>
    <div class="book container">
      <div class="book__inner">
        <!-- IMG -->
        <div class="book__img">
          <img
            src="https://cv2.litres.ru/pub/c/elektronnaya-kniga/cover_330/66260724-kristian-vind-introvert.jpg"
            alt=""
          />
        </div>
        <!-- Img end -->
        <!-- Book content -->
        <div class="book__content">
          <h1 class="book__name">Интроверт</h1>
          <h2 class="book__author">
            Author: <a href="/">Кристиан Роберт Винд</a>
          </h2>

          <button class="book__btn btn">Купить</button>
        </div>
        <!-- Book content end -->
      </div>

      <hr class="line" />

      <section class="book__description">
        <h2 class="book__description-title">Описание</h2>
        <p class="text">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque ab
          praesentium, ad ipsa, exercitationem eveniet deleniti, omnis
          temporibus at corrupti beatae laudantium officia aliquam dolorem
          aliquid. Eaque labore corporis assumenda? Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Commodi asperiores minus ipsum vel
          maiores, delectus deserunt, similique in et aperiam voluptatibus
          nesciunt odio! Quaerat, suscipit possimus odit culpa fugiat atque!
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quo
          voluptas tempora corrupti velit incidunt reiciendis alias. Eos est hic
          adipisci dolore, obcaecati, dicta nostrum aperiam fuga sit vel
          reiciendis.
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
