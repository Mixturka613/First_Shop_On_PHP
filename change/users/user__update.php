
<?php
    include __DIR__ . "/../../authorisation/auth-test.php";
    include __DIR__ . "/../../admin/admin__test.php";

    if (empty($_POST['id'])) {
        die("Error: Id не указан");
    }

    switch ($_POST['change']) {
        case "edit": 
            updateUser();
            break;
        case "delete":
            deleteUser();
            break;
    }

    function updateUser() {
        include __DIR__ . "/../../connectBD.php";
        $id = (int)$_POST["id"];
        $admin;

        if ($_POST["admin"] === "false") {
            $admin = 0;
        } else {
            $admin = 1;
        }
        $sql;
        
        if (empty($_POST['username'])) {
            $sql = "UPDATE users SET admin = '$admin' WHERE id = '$id' ";
        } else {
            $username = $_POST['username'];

            var_dump($admin);
            $sql = "UPDATE users SET admin = '$admin', username = '$username' WHERE id = $id ";
        }

        if ( !$connect->query($sql) ) {
            die("Ошибка запроса");
        } else {
            echo "Запрос успешен!";
            echo "<br>";
            echo "<a href='/admin/admin.php'>Click</a>";
        } 

    }

    function deleteUser() {
        include __DIR__ . "/../../connectBD.php";

        $id = (int)$_POST["id"];

        $sql = "DELETE FROM users WHERE id = '$id' ";
        
        if ( !$connect->query($sql) ) {
            die("Ошибка запроса");
        } else {
            echo "Запрос успешен!";
            echo "<br>";
            echo "<a href='/admin/admin.php'>Click</a>";
        }
         
    }
?>