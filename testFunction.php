<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testFunction</title>
</head>
<body>
    <?php

    $x = 100;
    $y = 10;
    $operator = '*';

    if($operator == '+'){
        plus();
    }
    else if($operator == '-'){
        sub();
    }
    else if($operator == '*'){
        mul();
    }
    else if($operator == '/'){
        div();
    }

    function plus(){
        global $x,$y;
        echo "x + y = ".($x + $y). "<br>"; 
    }

    function sub(){
        global $x,$y;
        echo "x - y = ".($x - $y). "<br>";  
    }

    function mul(){
        global $x,$y;
        echo "x * y = ".($x * $y). "<br>";  
    }

    function div(){
        global $x,$y;
        echo "x / y = ".($x / $y). "<br>"; 
    }

   
    ?>
</body>
</html>