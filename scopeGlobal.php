<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scopeGlobal</title>
</head>
<body>
    <?php
    $x = 5;     //glocal scope

    function myTest(){
        global $x;
        echo "<p>Variable x inside function is : $x </p>";
    }
    myTest();

    echo "<p>Variable x outside function is : $x</p>"
    ?>
</body>
</html>