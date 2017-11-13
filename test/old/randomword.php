<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 25.07.2017
 * Time: 20:31
 */

class randomWord
{
    private $min = 5;
    private $max = 20;
    public $randomWord = array("q","w","e","r","t","y");


    function random($randomWord ){
      return $r=array_rand(($this->randomWord ),2);

    }

}