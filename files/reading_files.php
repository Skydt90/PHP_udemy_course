<?php 

    $path = "example_file.txt";

    
    if($file = fopen($path, "r"))
    {
        echo $content = fread($file, filesize($path)); // each byte equals a character
        fclose($file);
    }
    else
    {
        echo "Unable to write to file";
    }
    
    
    















?>