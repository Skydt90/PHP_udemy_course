<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    
    // global
    $x = "outside";
    
    function convert()
    {
        global $x;  // look for a global variable x
        $x = "inside";  // local
    }
    
    convert();
    echo $x;
    echo "<br>";
    
    
    
    
    
    
    
    
    
    
?>
            
</body>
</html>