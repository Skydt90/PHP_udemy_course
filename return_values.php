<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    
    $results = [];
    
    function calculateSum($number1, $number2)
    {
        return $number1 + $number2;
    }
    
    $result = calculateSum(1, 9);
    echo $result;
    array_push($results, $result);
    
    echo "<br>";
    
    $result = calculateSum(32, $result);
    echo $result;
    array_push($results, $result);
    
    echo "<br>";
    
    foreach($results as $result)
    {
        echo $result . "<br>";
    }
    
    
    
    
    
?>
            
</body>
</html>