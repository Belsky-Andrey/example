<?php
//Замечание: Свойства не могут быть объявлены окончательными, только классы и методы.
class BaseClass {
   public function test() {
       echo "Вызван метод BaseClass::test()\n";
   }
   
   final public function moreTesting() {
       echo "Вызван метод BaseClass::moreTesting()\n";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "Вызван метод ChildClass::moreTesting()\n";
   }
}
// Выполнение заканчивается фатальной ошибкой: Cannot override final method BaseClass::moreTesting()
// (Метод BaseClass::moretesting() не может быть переопределён)

//----------------------------------

final class BaseClass {
   public function test() {
       echo "Вызван метод BaseClass::test()\n";
   }

   // В данном случае неважно, укажете ли вы этот метод как final или нет
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called\n";
   }
}

class ChildClass extends BaseClass {
}
// Выполнение заканчивается фатальной ошибкой: Class ChildClass may not inherit from final class (BaseClass)
// (Класс ChildClass не может быть унаследован от окончательного класса (BaseClass))
?>
