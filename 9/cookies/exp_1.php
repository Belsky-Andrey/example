<?php
  function showForm() {
    $string = "<form action = '".$_SERVER["SCRIPT_NAME"]."' method='post'>";
    $string .= "<label>Name: </label>";
    $string .= "<input type = 'text' name = 'login'>";
    $string .= "<br />";
    $string .= "<label>Password: </label>";
    $string .= "<input type = 'password' name = 'pass'>";
    $string .= "<br />";
    $string .= "<input type = 'submit' name = 'log' value = 'Ok'>";
    $string .= "</form>";
    return $string;
  }
  function check($login, $pass) {
    if (($login == "Admin") && ($pass == md5("123456"))) return true;
    else return false;
  }
  if (isset($_POST['log'])) {
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);
    if (check($login, $pass)) {
      setcookie("login", $login);
      setcookie("pass", $pass);
    }    
    else echo "cookies not found";
  }
?>
<html>
<head>
</head>
<body>
  <?php
    $login = $_COOKIE['login'];
    $pass = $_COOKIE['pass'];
    if (check($login, $pass)) echo "hello, $login";
    else echo showForm();
  ?>
</body>
</html>
