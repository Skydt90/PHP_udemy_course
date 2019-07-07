<?php 

    $name = "someName";
    $value = 100;
    $expiration = time() + (60*60*24*7); //seconds * minutes * hours * days
    
    setcookie($name, $value, $expiration);

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    if(isset($_COOKIE["someName"]))
    {
        $someOne = $_COOKIE["someName"];
        echo "cookie value = " . $someOne;
    }
    else
    {
        $someOne = "";
    }
    
?>
         
</body>
</html>