<?php

function error_msg($err_type, $err_msg, $err_file, $err_line)
{
	static $count = 0;
	$count++;
	echo "<div style=\"width:32px; height:32px; background:url(error.png); float:left; margin:0 12px 12px 0;\"></div>"
	     ."<b>Ошибка №$count:</b><p>Извините, но на этой странице возникла ошибка. "
	     ."Пожалуйста, отправьте следующее сообщение администратору сайта на странице <a href='help.html'>help</a>.</p>"
		 ."<p>Тип ошибки: <em>$err_type</em>, сообщение: <em>$err_msg</em>, файл: <em>$err_file</em>, номер строки: <em>$err_line</em>"
		 ."<hr color='red'>";
}
// Регистрируем нашу функцию в качестве обработчика ошибок
set_error_handler("error_msg");
// Генерируем ошибку, чтобы проверить вызывается ли функция error_msg
include 'undefined.php';


//==========================

function error_msg_mod($type, $msg, $file, $line)
{
	// Записать в журнал ошибок
	$log_msg = "Тип ошибки: $type, сообщение: $msg, файл: $file, номер строки: $line, время возникновения: ".time();
	$log_path = "tmp/php_errors.log";
	error_log($log_msg, 3, $log_path);
}
// trigger_error("Тестируем сообщение уровня 'Notice'", E_USER_NOTICE);
