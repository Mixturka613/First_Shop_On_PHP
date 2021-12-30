<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="scripts/menu.js " defer></script>
    <title>Document</title>
</head>
<body>

    <header class="header">
      <? include ('./particals/header/header.php'); ?>
    </header>

    <?php include ('./particals/menu/menu.php') ?>

    <div class="container">

        <?php 

            include __DIR__ . "/connectBD.php";

            $products = [
                "id" => "Count"
            ];

            $emailUser = getDataUser($_COOKIE['jwt-tocken'])->email;

            if(empty($emailUser)) {
                die("Вы не авторизованы");
            }

            $data = $connect->query("SELECT id FROM users WHERE email = '$emailUser'");

            $userID;
            foreach ($data as $id) {
                $userID = $id['id'];
            }

            $sql = "SELECT products FROM basket WHERE userID = $userID";


           $data = $connect->query($sql);
            var_dump($data->fetch_assoc());

        ?>

    </div>
    
</body>
</html>