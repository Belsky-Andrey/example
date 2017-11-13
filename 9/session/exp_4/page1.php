<?php 
session_start();
echo 'Welcome to page #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

// Работает, если сессионная cookie принята
echo '<br /><a href="page2.php">page 2</a>';
// Или, может быть, передадим идентификатор сами
echo '<br /><a href="page2.php?' . SID . '">page 2</a>';
