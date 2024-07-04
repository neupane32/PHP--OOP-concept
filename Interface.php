<?php
/*interface:
Interfaces make it easy to use a variety of different classes in the same way. 
When one or more classes use the same interface, it is referred to as "polymorphism". 
Interfaces are declared with the interface keyword:
*/

Interface People {
    public function categories();
}


class Boy implements People{
    public function categories()
    {
        echo"The male is one category of a people. <br>";
    }
}

class Girl implements People{
    public function categories()
    {
        echo "The female is another category of a people";
    }
}

//creating object
$boy = new Boy();
$girl = new Girl();

$people = [$boy, $girl];

//foreach loop
foreach($people as $person){
    $person->categories();
}

?>