<?php 


class Car
{
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    
    function drive()
    {
        echo "driving forward..";
        $this->wheels = 5;
    } 
}


$tesla = new Car();
$bmw = new Car();

$tesla->drive();

echo "<br>" . $tesla->hood;

echo "<br>Tesla has: " . $tesla->wheels . " wheels";
echo "<br>bmw has: " . $bmw->wheels . " wheels";




















?>