<?php


require_once 'vendor/autoload.php';

use Dykyi\Module\Test;

$test = new Test();
echo $test->getNamespaceName();