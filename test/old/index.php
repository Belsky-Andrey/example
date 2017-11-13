<?php
require_once 'randomsentence.php';
require_once 'randomword.php';

$rand =new randomWord();
var_dump($rand);
echo $rand->random();

function makeSentence(){

}