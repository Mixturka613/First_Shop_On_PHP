<?php

setcookie("jwt-tocken","",time()-10000, '/coolbook');
return header('Location: http://localhost/coolbook/');

?>