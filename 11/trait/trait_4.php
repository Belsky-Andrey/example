<?php

trait SayWorld {
    public function sayHello() {
        echo 'World!';
    }
}

class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}


$o = new Base();
$o->sayHello();

//result = Hellow
// ===================================


trait SayWorld {
    public function sayHello() {
        echo 'World!';
    }
}

class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}


class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

//result = World
