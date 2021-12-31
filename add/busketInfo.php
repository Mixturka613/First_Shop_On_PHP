<?php
include __DIR__ . "/../connectBD.php";
include __DIR__ . "/../product.php";

if(empty($_COOKIE['jwt-tocken'])) {
    return false;
}

$emailUser = getDataUser($_COOKIE['jwt-tocken'])->email;

$userData= $connect->query("SELECT id FROM users WHERE email = '$emailUser'");

$userID;
foreach ($userData as $id) {
    $userID = $id['id'];
}

$sql = "SELECT products, count FROM basket WHERE userID = $userID";
$products;
$result;
foreach( $connect->query($sql) as $product) {
    $products[] = $product;
}

$busket = array();

if( empty($products) ) {
    $basket['userID'] = $userID;
    $basket['resultPrice'] = 0;
    return $busket;
}
      
for ($i = 0; $i < count($data); $i++) {

    $bookID = $data[$i]['id'];

    foreach ( $products as $product) {
        if ( $product['products'] !== $data[$i]["id"] ) {
            continue 1;
        } 

        $resultProduct = $data[$i]['price'] * $product['count'];
        $result += $resultProduct;
        $basket['elements'][$bookID] = [ $data[$i] + ['count' => $product['count'], 'resultProduct' => $resultProduct] ] ;
    }
}

$basket['resultPrice'] = $result;
$basket['userID'] = $userID;