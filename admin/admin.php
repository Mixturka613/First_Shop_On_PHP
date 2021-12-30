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

          <h2 class="menu__title">Authors</h2>

          <ul class="menu__list">
            <a class="menu__links" href="/admin/message.php">messages</a>
          </ul>

        </div>

        <div class="admin__page">
          <div class="admin__todos plugin">
            <form class="admin__form" action="/admin/todos.php">
              <input
                class="todo__input"
                type="text"
                placeholder="Write new case..."
                name="case"
              />
              <input class="todo__btn default__btn" type="submit" value="Add" />
            </form>

            <hr class="line" />

            <!-- Todos LIST -->
            <div class="admin__todos__list">
              <form class="todo__block" method="POST">
                <div class="todo__block__interface">
                  <p class="todo__text">Что-то...</p>

                  <input
                    type="submit"
                    name="finish"
                    value=""
                    id="todo_delete"
                  />
                  <label class="todo_delete" for="todo_delete"
                    ><img src="/img/recycle-bin.png" alt=""
                  /></label>
                </div>

                <p class="todo__date">Dedline: 31.12.21</p>
              </form>
            </div>
            <!-- Todos LIST END -->
            
          </div>
        </div>
      </div>
    </div>


</body>
</html>