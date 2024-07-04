<?php

/*
 PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
*/

trait message1 {
    public function mes1() {
        echo" Traits is the new concept in PHP.<br>";
    }
}

trait message2 {
    public function mes2() {
        echo"OOP is vey hard to understand.";
    }
}

class Welcome {
    use message1;
}

class Welcome2 {
    use message2;
}

class WelcomeFinal {
    use message1, message2;
}

$obj = new Welcome();
$obj->mes1()."<br>";

$obj2 = new WelcomeFinal();
$obj2->mes1();
$obj2->mes2();


?>