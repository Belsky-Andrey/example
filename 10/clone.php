<?php
class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Принудительно копируем this->object, иначе
        // он будет указывать на один и тот же объект.
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Оригинальный объект:\n");
print_r($obj);

print("Клонированный объект:\n");
print_r($obj2);

?>

// В некоторых ситуациях, когда вы действительно хотите сделать копию объекта, вы можете использовать ключевое слово clone. 
// В сущности, всё намного тоньше. При создании переменной объекта, она содержит указатель на объект в памяти, а не на сам объект. 
// При присвоении или передаче переменной вы на самом деле создаёте копию переменной. 
// Но копия, также является просто указателем на объект — обе копии по-прежнему указывают на тот же объект. 
// Таким образом, в большинстве случаев вы создаёте ссылки.
