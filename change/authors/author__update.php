<?php

    include __DIR__ . "/../../authorisation/auth-test.php";
    include __DIR__ . "/../../admin/admin__test.php";

    switch ($_POST['change']) {
        case "edit":
            editAuthor();
            break;
        case "delete":
            deleteAuthor();
            break;
        case "add":
            addAuthor();
            break;
    }

    function editAuthor() {
        include __DIR__ . "/../../connectBD.php";
        $id = $_POST['id'];
        $name = $_POST['name'];
        $profession = $_POST['profession'];
        $bio = $_POST['biography'];
        $description = $_POST['description'];

        if(empty($id) and empty($name) and empty($profession) and empty($bio) and empty($description)) {
            die("ERROR: Не все поля заполнены");
        }

        $sql = "UPDATE authors SET id = $id, name='$name', profession='$profession', biography='$bio', description='$description'";

        if (!$connect->query($sql)) {
            die("ERROR: Ошибка запроса");
        } else {
            echo "Запрос успешен!";
            echo "<br>";
            echo "<a href='/admin/admin.php'>Click</a>";
        }

    }


    function addAuthor() {
        include __DIR__ . "/../../connectBD.php";
        $name = $_POST['name'];
        $birthday = $_POST['birthdate'];
        $diedate = $_POST['diedate'];
        $place_of_birth = $_POST['place_of_birth'];
        $profession = $_POST['proffesion'];
        $description = $_POST['description'];
        $biography = $_POST['biography'];

        if( empty($name) and empty($birthday) and empty($diedate) and empty($place_of_birth) and empty($profession) and empty($description) and empty($biography)) {
            die("ERROR: Не все поля заполнены");
        }

        $sql = "INSERT INTO authors (name, birthdate, diedate, place_of_birth, profession, description, biography) VALUES ('$name', '$birthday', '$diedate', '$place_of_birth', '$profession', '$description', '$biography')";

        if( !$connect->query($sql) ) {
            die("ERROR: Ошибка запроса");
        } else {
            echo "Запрос успешен!";
            echo "<br>";
            echo "<a href='/admin/admin.php'>Click</a>";
        }
    }

    function deleteAuthor() {
        include __DIR__ . "/../../connectBD.php";
        $id = $_POST['id'];

        if(empty($id)) {
            die("ERROR: Не все поля заполнены");
        }

        $sql = "DELETE FROM authors WHERE id = $id";

        if ( !$connect->query($sql) ) {
            die("Ошибка запроса");
        } else {
            echo "Запрос успешен!";
            echo "<br>";
            echo "<a href='/admin/admin.php'>Click</a>";
        }
    }