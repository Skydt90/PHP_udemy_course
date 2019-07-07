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
        echo $this->wheels = 5;
    } 
}


class Plane extends Car
{
    var $wheels = 2;
}



$plane = new Plane();

echo $plane -> wheels . "<br>";

$plane->drive();











?>