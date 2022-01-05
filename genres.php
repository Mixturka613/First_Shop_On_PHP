<?php

// $genres = [
//     ["name" => "Зарубежная классика"],
//     ["name" => "Русская классика"],
//     ["name" => "Течническая литература"],
//     ["name" => "Антиутопия"]
// ]


include_once __DIR__ . "/connectBD.php";

$genres = array();

foreach ( $connect->query("SELECT * FROM `genres`") as $genre) {
    $genres[] = $genre;
}