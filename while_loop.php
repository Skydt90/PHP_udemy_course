<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>While Loop</title>
</head>
<body>

<?php 
    
    $slist = array();
    $number = 0;
    
    while($number < 10)
    {
        array_push($slist, $number);
        echo "Number: " . $slist[$number] . "<br>";
        $number ++;
    }
    
?>
            
</body>
</html>