<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    
    $list = [33, 123, 24, 5123, 12, 1223];
    
    array_push($list, "1000000");
    echo max($list);
    echo "<br>";
    echo min($list);
    echo "<br>";
    sort($list);
    print_r($list);
    echo "<br>";
    
    

?>
            
</body>
</html>