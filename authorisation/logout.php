<?php
$link = $_SERVER['HTTP_REFERER'];
setcookie("jwt-tocken","",time()-10000, '/');
return header("Location: $link");

?>