<?php 

    include __DIR__ . "/../../authorisation/auth-test.php";
    include __DIR__ . "/../../admin/admin__test.php";
    
    switch ($_POST['change']) {
        case "edit":
            editBook();
            break;
        case "add":
            addNewBook();
            break;
        case "delete": 
            deleteBook();
            break;
    }

    function addNewBook() {

        include __DIR__ . "/../../connectBD.php";
        $data = $_POST;

        $name = $data['book__name'];
        $img = $data['imgUrl'];
        $description = $data['description'];
        $price = $data['price'];
        $genre = $data['genre'];
        $author = $data['author'];

        $sql = "INSERT INTO books (name, author, urlImg, price, genre, description) VALUES ('$name', '$author' , '$img', $price, '$genre', '$description')";

        if ( !$connect->query($sql) ) {
            die("Ошибка запроса");
        } else {
            echo "Запрос успешен!";
            echo "<br>";
            echo "<a href='/admin/admin.php'>Click</a>";
        }
    }

    function deleteBook() {
        include __DIR__ . "/../../connectBD.php";
        $id = $_POST['id'];

        if ( empty($id) ) {
            die("Error: Id не указан");
        }

        $sql = "DELETE FROM books WHERE id = $id";

        if ( !$connect->query($sql) ) {
            die("ERROR: Ошибка запроса");
        } else {
            echo "Запрос успешен!";
            echo "<br>";
            echo "<a href='/admin/admin.php'>Click</a>";
        }
    }

    function editBook() {
        include __DIR__ . "/../../connectBD.php";
        $id = $_POST['id'];
        $img = $_POST['imgUrl'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        if ( empty($id) and empty($img) and empty($description) and empty($price) ) {
            die("ERROR: Не все поля заполнены");
        }

        $sql = "UPDATE books SET urlImg = '$img', description = '$description', price = $price WHERE id = $id";

        if ( !$connect->query($sql) ) {
            die("ERROR: Ошибка запроса");
        } else {
            echo "Запрос успешен!";
            echo "<br>";
            echo "<a href='/admin/admin.php'>Click</a>";
        }
    }