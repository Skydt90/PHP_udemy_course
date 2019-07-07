<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    // two ways of declaring
    $number_list0 = [];
    $number_list1 = array(23, 25, 'str', '<h1>Hi!</h1>');
    
    // built in print_r function that prints array
    print_r($number_list1);
    echo $number_list1[1];
    
?>    
            
</body>
</html>