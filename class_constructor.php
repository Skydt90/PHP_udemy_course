<?php 


class Car
{
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    
    function __construct($wheels, $doors)
    {
        $this -> wheels = $wheels;
        $this -> doors = $doors;
    }
    
    
    function drive()
    {
        echo "driving forward..";
        echo $this->wheels = 5;
    } 
}


$tesla = new Car(4, 4);

echo $tesla -> doors;











?>