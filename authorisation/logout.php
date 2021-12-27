<?php

setcookie("jwt-tocken","",time()-10000, '/');
return header('Location: http://coolbook/');

?>