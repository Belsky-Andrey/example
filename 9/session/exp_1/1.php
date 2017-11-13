<?php
  session_start();
  $_SESSION['username'] = "roman";
  echo 'Привет, '.$_SESSION['username']."<br>";
?>
 
<html>
<head></head>
<body>
 <a href="1.php">На следующую страницу </a>
</body>
</html>
