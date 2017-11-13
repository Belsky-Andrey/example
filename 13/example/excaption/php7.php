<?php

try
{
    throw new Exception('Деление на ноль.');
}
catch (Error $t)
{	
	echo 'error catch';
}

