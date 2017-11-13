<html>
<head></head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
  <fieldset>
    <legend>Выберите ваших любимых питомцев</legend>
    <label for="dog">
    <input id="dog" type="checkbox" name="animal[]" value="Собака"> Собака</label>
    <label for="cat">
    <input id="cat" type="checkbox" name="animal[]" value="Кошак"> Кошак</label>
    <label for="anaconda">
    <input id="anaconda" type="checkbox" name="animal[]" value="Анаконда"> Анаконда</label>
    <label for="human">
    <input id="human" type="checkbox" name="animal[]" value="Человек"> Человек</label>
    <label for="elephant">
    <input id="elephant" type="checkbox" name="animal[]" value="Слон"> Слон</label>
    <label for="wildebeest">
    <input id="wildebeest" type="checkbox" name="animal[]" value="Антилопа"> Антилопа</label>
    <label for="pigeon">
    <input id="pigeon" type="checkbox" name="animal[]" value="Голубь"> Голубь</label>
    <label for="crab">
    <input id="crab" type="checkbox" name="animal[]" value="Краб"> Краб</label>
  </fieldset>
  <input type="submit" value="Отправить информацию">
</form>
</body>

<?php 
    $animal = isset($_POST['animal']) ? $_POST['animal'] : '';
	
	if (!empty($animal))
	{
		echo '<br><br>Выбраны животные: ';
		foreach ($animal as $a)
		{
			echo "<span style=\"color:orange\">".htmlentities($a)." </span>";
		}
	}
?>

</html>