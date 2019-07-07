<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    function greeting($message)
    {
        echo "Funtion parameter was: " . $message;
    }
  
    $message = "Sup";
    greeting($message);
    
    
    function subtract($number1, $number2)
    {
        return $number1 - $number2;
    }
    
    
    echo "<br>Calculation equals: " . subtract(5, 3);
    
?>
            
</body>
</html>