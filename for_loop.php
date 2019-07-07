<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    
    $list = array();
    
    for($count = 1; $count <= 10; $count++)
    {
        array_push($list, $count);
        echo $list[$count - 1];
    }
    
    
    
?>
            
</body>
</html>