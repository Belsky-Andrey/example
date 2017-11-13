<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Любимый вид спорта</title>
</head>

<body>

<h1>Ваш любимый вид спорта - <span style="color:red">
<?php
    echo isset($_GET['sport']) ? $_GET['sport'] : '';
?>
</span></h1>
</body>
</html>
