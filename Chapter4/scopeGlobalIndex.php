<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scopeGlobalIndex</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 10;
    $z = $x + 5;

    function myTest(){
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'] + $GLOBALS['z'];
    }

    myTest();
    echo "<h1>$y</h1>";
    ?>
</body>
</html>