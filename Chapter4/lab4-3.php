<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4-3</title>
</head>
<body>
<?php
    $x = 123;
    $y = "abc";
    echo "$ x = $x <br />";
    echo "$ y = $y <br />";
    $x = &$y;
    echo "$ x = &$ y <br />";
    echo "$ x = $x <br />";
    echo "New value $ x<br />";
    $x = "php";
    echo "$ x = $x <br />";
    echo "$ y = $y <br />";
    echo "New value $ y<br />";
    $y = 100;
    echo "$ x = $x <br />";
    echo "$ y = $y <br />";
?>
</body>
</html>