<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scopeLocal</title>
</head>
<body>
    <?php
    function myTest(){
        $x = 5;     //local scope
        echo "<p>Variable x inside function is : $x</p>";
    }
    myTest();

    $x = 4;
    echo "<p>Variable x outside function is : $x</p>"
    ?>
</body>
</html>