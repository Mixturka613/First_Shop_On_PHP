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

    <?php include __DIR__ . "/../particals/menu/menu.php" ?>

    <?php
        include __DIR__ . "/admin__test.php";
    ?>

<div class="container">
      <div class="admin__panel">
        <div class="admin__menu">
          <h2 class="menu__title">Users</h2>
          <ul class="menu__list">
            <a class="menu__links" href="/change/change.php?change=edit&category=users">Edit</a>
            <a class="menu__links" href="/change/change.php?change=delete&category=users">Delete</a>
          </ul>

          <h2 class="menu__title">Books</h2>

          <ul class="menu__list">
            <a class="menu__links" href="/change/change.php?change=edit&category=books">Edit</a>
            <a class="menu__links" href="/change/change.php?change=add&category=books">Add</a>
            <a class="menu__links" href="/change/change.php?change=delete&category=books">Delete</a>
          </ul>

          <h2 class="menu__title">Authors</h2>

          <ul class="menu__list">
            <a class="menu__links" href="/change/change.php?change=edit&category=authors">Edit</a>
            <a class="menu__links" href="/change/change.php?change=add&category=authors">Add</a>
            <a class="menu__links" href="/change/change.php?change=delete&category=authors"
              >Delete</a
            >
          </ul>

          <h2 class="menu__title">Messages</h2>

          <ul class="menu__list">
            <a class="menu__links" href="/admin/message.php">messages</a>
          </ul>

          <h2>Orders</h2>

          <ul class="menu__list">
            <a class="menu__links" href="/admin/orders.php">orders</a>
          </ul>

        </div>
            
          </div>
        </div>
      </div>
    </div>


</body>
</html>