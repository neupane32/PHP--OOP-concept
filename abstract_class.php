<?php
/*Abstract class
An abstract class is a class that contains at least one abstract method. 
An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the "abstract" keyword */

//parent class
abstract class Car {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    //abstract method
    abstract public function intro(): string;
}

//child class
class Toyota extends Car {
    public function intro(): string
    {
        return"This is the best car.'<br>'
        The name of Car is $this->name";
    }   
}

//creating object
$toyota = new Toyota("Toyota");
echo $toyota-> intro();


?>