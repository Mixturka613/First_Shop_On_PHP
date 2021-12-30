<?php 

      if ( empty($_COOKIE['jwt-tocken'])) {
        die("Erorr: Вы не авторизованы");
      }
      // Получаем данные из кук
      $adminData = getDataUser($_COOKIE['jwt-tocken']);

      // Проверка на админа
      if ( !$adminData->admin ) {
        die('Error. Вы не являетесь админом');
      }
