<?php 

abstract class Fruit { 
    private $color; 
    
    abstract public function eat(); 
    
    public function setColor($c) { 
        $this->color = $c; 
    } 
} 

class Fruit { 
    
    public function eat() { 
        //chew 
    } 
    
    public function setColor($c) { 
        $this->color = $c; 
    } 
} 

class Apple extends Fruit { 
    public function eat() { 
        //chew until core 
    } 
} 

class Orange extends Fruit { 
    public function eat() { 
        //peel 
        //chew 
    } 
} 


// Now I give you an apple and you eat it. 
$apple = new Apple(); 
$apple->eat(); 


//What does it taste like? It tastes like an apple. Now I give you a fruit. 
$fruit = new Fruit(); 
$fruit->eat(); 
