<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    $colors = array("red", "blue", "green");
    $count = 0;
    
    foreach($colors as $color) 
    {
        $count ++;
        echo $count . ": " . $color . "<br>";
    } 
    
?>
            
</body>
</html>