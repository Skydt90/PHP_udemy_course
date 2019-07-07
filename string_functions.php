<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    $string = "hello there !";
    echo strlen($string);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo strtolower($string);
    echo "<br>";
    echo substr($string, 2, strlen($string) - 3);
    print("<br>");
    print($string . " print");
    
    
?>
            
</body>
</html>