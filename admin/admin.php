<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <script src="/scripts/menu.js " defer></script>
    <title>Document</title>
</head>
<body>
    

    <header class="header">
      <?php include ( "../particals/header/header.php" ) ?>
    </header>

    <?php 
      $ds = DIRECTORY_SEPARATOR;
      include (realpath ( dirname(__FILE__) . $ds . ".." ) . $ds . "particals\menu\menu.php" );
    ?>

    <?php 
      // Получаем данные из кук
      $adminData = getDataUser($_COOKIE['jwt-tocken']);

      // Проверка на админа
      if ( !$adminData->admin ) {
        die('Error. Вы не являетесь админом');
      }

      echo "Вы админ!";

    ?>

</body>
</html>