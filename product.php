<?php

include ('./connectBD.php');

$query = "select * from books";
$sql_data = mysqli_query($connect, $query);

$data = [];
while ($row = mysqli_fetch_assoc($sql_data))
{ 
    $data[] = $row;
}


// print_r($i);

// $data = $newdata;

// INSERT books (name, author, urlImg, price, genre, description) VALUES( "451 degrees Fahrenheit 1", "Ray Bradbury", "https://cv2.litres.ru/pub/c/elektronnaya-kniga/cover_330/66260724-kristian-vind-introvert.jpg", 500, "Fantazy", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque ab
//           praesentium, ad ipsa, exercitationem eveniet deleniti, omnis
//           temporibus at corrupti beatae laudantium officia aliquam dolorem
//           aliquid. Eaque labore corporis assumenda? Lorem ipsum dolor sit amet
//           consectetur adipisicing elit. Commodi asperiores minus ipsum vel
//           maiores, delectus deserunt, similique in et aperiam voluptatibus
//           nesciunt odio! Quaerat, suscipit possimus odit culpa fugiat atque!
//           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quo
//           voluptas tempora corrupti velit incidunt reiciendis alias. Eos est hic
//           adipisci dolore, obcaecati, dicta nostrum aperiam fuga sit vel
//           reiciendis. hello world 1");


?>