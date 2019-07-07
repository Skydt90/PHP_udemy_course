<?php 


class Car
{
    
    private $wheels = 4;
    private $hood = 1;
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
        echo $this->wheels = 5;
    }
    
    function getDoors()
    {
        return $this -> doors;
    }
}

class Semi extends Car{}


$tesla = new Car(4, 4);
$semi = new Semi(4, 4);

echo $tesla -> getDoors();
echo $semi -> getDoors();










?>