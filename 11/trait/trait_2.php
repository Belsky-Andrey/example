<?php

// Доповнення класу статичними методами які часто використовувані
// Можна використати для зменшення дублювання коду
trait StaticExample {
    public static function doSomething() {
        return 'Что-либо делаем';
    }
}

class Example {
    use StaticExample;
}

class Test {
    use StaticExample;
}

Example::doSomething();
Test::doSomething();
