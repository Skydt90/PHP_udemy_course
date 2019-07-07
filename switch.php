<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    $number = 10;
    
    switch($number) 
    {
            
        case 34:
            echo "it is 34";
            break;
        
        case 4:
            echo "it is 4";
            break;
        
        case 7:
            echo "it is 7";
            break;
        
        default:
            echo "No such value: '" . $number . "'";
            break;
    }

?>
            
</body>
</html>