<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="/scripts/menu.js " defer></script>
    <title></title>
  </head>
  <body>

      <?php
        include ('./particals/menu/menu.php');
        include __DIR__ . "/add/busketInfo.php";
      ?>


    <header class="header">
      <?php include ( "./particals/header/header.php" ) ?>
    </header>


    <?php 

      include __DIR__ . "./connectBD.php";

      $name = $_GET['authorName'];

      $sql = "SELECT * FROM authors WHERE name = '$name'"; 
      $dataAboutAuthor = $connect->query($sql);

      if(empty($dataAboutAuthor->num_rows)) {
        die("ERROR: Такого автора нет в нашей БД");
      }

      foreach ($dataAboutAuthor as $author) { ?>
    <div class="aythor container">
      <div class="author__main-info">
        <div class="author__img">
          <img
            src="<?= $author['urlImg'] ?>"
            alt=""
          />
        </div>

        <div class="author__main-info__inner">
          <h1 class="author__title"><?= $author['name'] ?></h1>
          <ul>
            <li class="author__info">
              <?= $author['birthdate'] . " - " . $author['diedate'] ?>
            </li>
            <li class="author__info"><?= $author['place_of_birth'] ?></h2>
            <li class="author__info">
              <?= $author['profession'] ?>
            </li>
          </ul>

          <p class="author__info">
            <?= $author['description'] ?>
          </p>
        </div>
      </div>

      <hr class="line" />

      <h2 class="author__title">Биография</h2>
      <p class="author__info">
       <?= $author['biography'] ?>
      </p>
    </div>

    <?php } ?>
  </body>
</html>
