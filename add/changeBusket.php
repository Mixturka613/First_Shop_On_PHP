<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

switch ( $_POST['change'] ) {
    case 1:
        change(1);
        break;
    case -1: 
        change(-1);
        break;
    case "close":

        break;
}

function change($changeNum) {
    include __DIR__ . "/../connectBD.php";

    $userID = $_POST['userID'];
    $productID = $_POST['bookID'];

    var_dump($productID['bookID']);

    // $getData = $connect->query("SELECT * FROM basket WHERE userID = $userID AND products = $productID");

    // var_dump($productID);

    if (!$getData) {
        die("ERROR");
    }

    foreach ($getData as $product) {
        echo '<pre>';
        print_r($product);
        echo '</pre>';
    }
}

