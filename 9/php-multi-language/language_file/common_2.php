<?php

define(FILE_SETTING, 'session.ini');

function read($file_name){
    $data = file_get_contents($file_name, true);
    return unserialize($data);
}

function write($file_name, $data){
    $data = serialize($data);
    return file_put_contents($file_name, $data);
}

$lang = 'en';
$settings = [];
$settings = read(FILE_SETTING);
if (!$settings){
    exit('error: file not found or read');
}

if (isset($_GET['lng']))
{
    $lang = $_GET['lng'];
    $settings['setting']['lng'] = $lang;
    write(FILE_SETTING, $settings);
} else {
    $lang = $settings['setting']['lng'];
}


switch ($lang) {
  case 'en':
    $lang_file = 'lang.en.php';
  break;

  case 'de':
    $lang_file = 'lang.de.php';
  break;

  case 'es':
    $lang_file = 'lang.es.php';
    break;
  case 'ua':
        $lang_file = 'lang.ua.php';
        break;
  default:
    $lang_file = 'lang.en.php';
}

include_once 'languages/'.$lang_file;
?>
