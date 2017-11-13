<?php
class PropertyTest 
{
    private $data = array();
    public $declared = 1;

    private $hidden = 2;

    public function __set($name, $value) 
    {
        echo "Установка '$name' в '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name) 
    {
        echo "Получение '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    public function __isset($name) 
    {
        echo "Установлено ли '$name'?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name) 
    {
        echo "Уничтожение '$name'\n";
        unset($this->data[$name]);
    }

    /**  Не "волшебный" метод, просто для примера. */
    public function getHidden() 
    {
        return $this->hidden;
    }
}


echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";

echo $obj->getHidden(); // Приватные свойства видны внутри класса, поэтому __get() не используется
echo $obj->hidden . "\n"; // Приватные свойства не видны вне класса, поэтому __get() используется
?>