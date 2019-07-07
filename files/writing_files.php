<?php 

    $path = "example_file.txt";

    
    if($file = fopen($path, "w"))
    {
        fwrite($file, "Test string to save in file");
        fclose($file);
    }
    else
    {
        echo "Unable to write to file";
    }
    
    
    















?>