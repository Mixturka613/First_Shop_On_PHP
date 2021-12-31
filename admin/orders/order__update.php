<?php

include __DIR__ . "/../../connectBD.php";

if (empty($_POST['active'])) {
    die("ERROR: Админ дурак, выбирай");
}

foreach ( $_POST['active'] as $order) {
    $sql = "DELETE FROM orders WHERE id = $order";

    if(!$connect->query($sql)) {
        die("ERROR: Ошибка запроса $id");
    } else {
        header('Location: http://coolbook/admin/orders.php');
    }
}
