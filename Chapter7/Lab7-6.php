<?php
    echo getcwd()."<br>";
    $dir = 'C:\xampp\htdocs\WebProPHP\Chapter7';
    $files = scandir($dir);
    foreach($files as $value){
        echo "$value <br>";
    }
    echo getcwd(). "<br>";
    chdir('..\..\..\\');
    echo getcwd(). "<br>";

    //กลับไปchapter7
    chdir('htdocs\WebProPHP\Chapter7');
    echo getcwd(). "<br>";
?>