<?php

/*Note: the final Keyword: used to prevent class form inheritance 
and to prevent method overriding. */

class Animal {
    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function aboutAnimal(){
        echo "The Name of Animal is {$this->name}. '<br>'";
        echo "The Color of Animal is {$this->color}. '<br>'";

    }
}

class Dog extends Animal {
    public $Age;
    public function __construct($name, $color, $Age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->Age = $Age;
    }

    function aboutAnimal(){
        echo "The Name of Animal is {$this->name}. '<br>'";
        echo "The Color of Animal is {$this->color}. '<br>'";
        echo "The Age of Animal is {$this->Age}";
    }

}
$dog = new Dog("Ashok","Busiya Kukur", 19);
$dog-> aboutAnimal();
?>