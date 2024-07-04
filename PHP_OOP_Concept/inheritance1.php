<?php
class Fruit {
    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color= $color;
    }
    public function intro(){
        echo"the name of fruit is {$this->name} and the color is {$this->color}".'<br>';
        echo"The color is {$this->color}";
    }
}

class Apple extends Fruit {

}
$apple = new Apple("Apple","Red");
$apple-> intro();

?>