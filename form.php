<?php 

    if(isset($_POST["submit"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        //echo $username . " " . $password;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- action is name of the file that is to recieve the data -->
<form action="form.php" method="post">
    
    <input type="text" name="username" placeholder = "Enter username">
    <br>
    <input type="password" name="password" placeholder = "Enter password">
    <br>
    <input type="submit" name="submit"> <!-- name = form in global post -->
</form>
            
</body>
</html>
