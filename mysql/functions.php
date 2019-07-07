<?php include "db.php";


function login()
{
    if(isset($_POST["submit"]))
    {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if($username && $password)
        {
            echo $username . " " . $password . " logged in success";
        }
        else
        {
            echo "Please enter both username and password";
        }
    }
}

function createUser()
{
    if(isset($_POST["submit"]))
    {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if(strlen($username && $password) < 1)
        {
            echo "Please enter both username and password!";
        }
        else
        {
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
            
            $hashFormat = "$2y$10$";
            $salt = "iusesomecrazystringsforsalts22";
            $hashAndSalt = $hashFormat . $salt;
            
            $password = crypt($password, $hashAndSalt);
            
            $query = "INSERT INTO users(username, password) ";
            $query .= "VALUES ('$username', '$password')";

            $result = mysqli_query($connection, $query);

            if(!$result)
            {
                die("query failed!" . mysqli_error());
            }
            else
            {
                echo "User created!";
            }
        }
    }
}

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    
    if(!$result)
    {
        die("Query failed!" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) 
    {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>"; 
    }
}

function updateUser()
{
    if(isset($_POST["submit"]))
    {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];
        
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' "; 
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result)
        {
            die("Query failed" . mysqli_error($connection));
        }
        else
        {
            echo "User updated!";
        }
    }
}

function deleteUser()
{
    if(isset($_POST["submit"]))
    {
        global $connection;
        $id = $_POST["id"];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result)
        {
            die("Query failed" . mysqli_error($connection));
        }
        else
        {
            echo "User deleted!";
        }
    }
}

function readAllUsers()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_assoc($result))
    {
        ?>
            <pre>
        <?php
        print_r($row);
        
    }
}


?>