<?php
//Вы можете изменить поведение сортировки, используя дополнительный параметр sort_flags
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
reset($fruits);
while (list($key, $val) = each($fruits)) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

//Флаги сортировки:
//SORT_REGULAR - сравнивать элементы нормально (не изменять типы)
//SORT_NUMERIC - сравнивать элементы в числовом отношении
//SORT_STRING - сравнивать элементы как строки
//SORT_LOCALE_STRING - сравнивать элементы как строки, основываясь на текущей локали. Добавлено в PHP 5.0.2

// !!! Будьте осторожны при сортировке массивов, содержащих элементы разных типов, 
 

// ------------------------

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
reset($fruits);
while (list($key, $val) = each($fruits)) {
    echo "$key = $val
";
}

// ------------------------------------------
   function cmp_function($a, $b) {
      if ($a == $b) return 0;
      return ($a > $b) ? -1 : 1;
   }
   
   $input = array("d"=>"lemon", "a"=>"orange", "b"=>"banana" );
   uksort($input, "cmp_function");
   
   print_r($input);
