<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    // regular array
    $some_list = array(10, 20, 45);
    
    print_r($some_list);
    echo "<br>";
    
    // essentially a map / dict
    $some_other = ["first_name" => 'Christian', "last_name" => 'Skydt'];
    
    foreach ($some_other as $entry)
    {
        echo $entry . " ";
    }
    
    //print_r($some_other);
    echo "<br>" . $some_other["first_name"] . " " . $some_other["last_name"];
    
    
?>    
            
</body>
</html>