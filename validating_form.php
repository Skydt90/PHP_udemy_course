<?php 
    // "submit" is name of the form submitted
    if(isset($_POST["submit"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $names = ["Christian", "Peter", "Emil", "James", "Tobias"];
        $min = 5;
        
        if(strlen($username) < $min)
        {
            echo "Username must contain more than 5 characters!";
        }
        
        if(!in_array($username, $names))
        {
            array_push($names, $username);
        }
        else 
        {
            echo "Welcome!";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<h1>Register</h1>
    <!-- action is name of the file that is to recieve the data -->
<form action="validating_form.php" method="post">
    
    <input type="text" name="username" placeholder = "Enter username">
    <br>
    <input type="password" name="password" placeholder = "Enter password">
    <br>
    <input type="submit" name="submit"> <!-- name = form in global post -->
</form>
            
</body>
</html>
