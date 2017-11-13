<?php
$f = fopen( 'php://stdin', 'r' );

while( $line = fgets( $f ) ) {
  echo $line;
}

fclose( $f );

//Reading from STDIN is recommended way

while (FALSE !== ($line = fgets(STDIN))) {
   echo $line;
}

$handle = @fopen("/tmp/inputfile.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}

// --------------------------------------
$fp = fopen('data.txt', 'w');
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);
// содержимое 'data.txt' теперь 123, а не 23!

$filename = 'test.txt';
$somecontent = "Добавить это к файлу\n";
// --------------------------------------
// Вначале давайте убедимся, что файл существует и доступен для записи.
if (is_writable($filename)) {

    // В нашем примере мы открываем $filename в режиме "записи в конец".
    // Таким образом, смещение установлено в конец файла и
    // наш $somecontent допишется в конец при использовании fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }

    // Записываем $somecontent в наш открытый файл.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Не могу произвести запись в файл ($filename)";
        exit;
    }

    echo "Ура! Записали ($somecontent) в файл ($filename)";

    fclose($handle);

} else {
    echo "Файл $filename недоступен для записи";
}

// --------------------------------------

$handle = fopen("http://www.example.com/", "rb");
$contents = stream_get_contents($handle);
fclose($handle);

// --------------------------------------

$handle = fopen("http://www.example.com/", "rb");
if (FALSE === $handle) {
    exit("Не удалось открыть поток по url адресу");
}

$contents = '';
//Учтите, что fread() читает начиная с текущей позиции файлового указателя. Используйте функцию ftell() для нахождения текущей позиции указателя и функцию rewind() для перемотки позиции указателя в начало.
while (!feof($handle)) {
    $contents .= fread($handle, 8192);
}
fclose($handle);

//Если вы просто хотите получить содержимое файла в виде строки, используйте file_get_contents(), так как эта функция намного производительнее, чем код описанный выше.











-----------------------------------------
<?php
// Получает содержимое файла в виде массива. В данном примере мы используем
// обращение по протоколу HTTP для получения HTML-кода с удаленного сервера.
$lines = file('http://www.example.com/');

// Осуществим проход массива и выведем содержимое в виде HTML-кода вместе с номерами строк.
foreach ($lines as $line_num => $line) {
    echo "Строка #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}

// Второй пример. Получим содержание web-страницы в виде одной строки.
// См.также описание функции file_get_contents().
$html = implode('', file('http://www.example.com/'));

// Используем необязательный параметр flags (начиная с PHP 5)
$trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

-------------------------------------
<?php
$file = 'people.txt';
// Открываем файл для получения существующего содержимого
$current = file_get_contents($file);
// Добавляем нового человека в файл
$current .= "John Smith\n";
// Пишем содержимое обратно в файл
file_put_contents($file, $current);
?>
