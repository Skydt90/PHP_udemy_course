<?php 


class Car
{
    private $wheels = 4;
    static $hood = 1;
    private $engine = 1;
    private $doors = 4;
    
    
    function __construct($wheels, $doors)
    {
        $this -> wheels = $wheels;
        $this -> doors = $doors;
    }
    
    
    function drive()
    {
        echo "driving forward..";
        Car::$hood = 3;
    }
}

Car::$hood = 2;
echo Car::$hood;








?>