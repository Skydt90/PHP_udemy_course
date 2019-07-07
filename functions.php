<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php 
    
    
    function saySomething($number, $string)
    {
        echo "<h1>$number " . $string . " This is written from a function call</h1>";
        sum();
    }
    
    function sum()
    {
        echo 10 + 200;
    }
    
    saySomething(3, "Hey!");
    echo "<br>";
    sum();
    
    
?>
           
            
</body>
</html>