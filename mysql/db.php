<?php 

    $connection = mysqli_connect("localhost", "root", "sesame", "login_app");

    if(!$connection)
    {
        die("Database connection failed!");
    }

?>