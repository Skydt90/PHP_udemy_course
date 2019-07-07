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
