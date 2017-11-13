<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Основы PHP</title>
<style>
* { font-family: Calibri }
fieldset { margin-bottom: 15px; padding: 10px }
legend { padding: 0px 3px; font-weight: bold; font-variant: small-caps }
label { width: 80px; display: inline-block; vertical-align: top; margin: 6px }
input, textarea { width: 249px }
input[type=submit] { width: 170px; padding: 10px }
.error { border:1px solid red }
</style>
</head>



<body>

<?php 
	$valid_name = ''; $valid_email = '';

	// Следующая проверка, в которой учитывается значение дескриптора 
	// Submit из приведенной ниже формы, позволяет узнать, не произошло
	// ли развертывание формы впервые (это позволяет сохранить введенные данные пользователем, 
	// при повторной отправке формы)
	if (!isset($_POST['submit']))
	{
		$_POST['name'] = '';
		$_POST['email'] = '';
	}
	else 
	{
		$name = htmlentities($_POST['name']);
		$email = htmlentities($_POST['email']);
		
		// Выполняем проверку формы, поля не должны быть пустыми,
		// а поле email должно содержать строку формата адреса электронной почты
		// (эти переменные указываются в форме в полях input в качестве атрибута class)
		$valid_name = !empty($name) ? '' : 'error';
		
		if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$valid_email = 'error';
		}
	}
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
  <fieldset>
    <legend>Контактная информация</legend>
      <label for="name">Имя</label>
      <input id="name" name="name" 
			value="<?php echo $_POST['name']; ?>"
            class="<?php echo $valid_name; ?>"><br>
      <label for="email">Email</label>
      <input id="email" name="email" 
			value="<?php echo $_POST['email']; ?>"
            class="<?php echo $valid_email; ?>"><br>
  </fieldset>
  <input type="submit" name="submit" value="Отправить информацию">
</form>
</body>
</html>
