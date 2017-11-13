<?php

  // Инициируем сессию
  session_start();


  // Помещаем значение в сессию
  $_SESSION['name'] = "value";

  // Помещаем массив в сессию
  $arr = array("first", "second", "third");
  $_SESSION['arr'] = $arr;

  // Выводим ссылку на другую страницу
  echo "<a href='2.php'>другая страница</a>";
