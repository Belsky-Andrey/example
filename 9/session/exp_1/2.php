<?php
  session_start();
  echo $_SESSION['username'].' , ты пришел на другую страницу этого сайта!';
  echo("<br>");
?>

<html>
<head></head>
<body>
  <a href="3.php">На следующую страницу </a>
</body>
</html>
