<?php
class Foo {
    public static function aStaticMethod() {
        // ...
    }
}

Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod(); // Начиная с PHP 5.3.0
?>
--------------------------------------
<?php
class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
print $foo->my_static . "\n";      // Не определено свойство my_static

print $foo::$my_static . "\n"; // Начиная с PHP 5.3.0
$classname = 'Foo';
print $classname::$my_static . "\n"; // Начиная с PHP 5.3.0

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";
?>

-------------------------------------

Static variables are shared between sub classes

<?php
class MyParent {
    
    protected static $variable;
}

class Child1 extends MyParent {
    
    function set() {
        
        self::$variable = 2;
    }
}

class Child2 extends MyParent {
    
    function show() {
        
        echo(self::$variable);
    }
}

$c1 = new Child1();
$c1->set();
$c2 = new Child2();
$c2->show(); // prints 2
?>