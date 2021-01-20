<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4-7</title>
</head>
<body>
<font size="3">
<?php
    define("x", 10);
    echo "The value of the constant is x. <br />";
    echo "The value of the constant is <b>";
    echo x;
    echo "</b>";
    echo "<br>";
    //define ได้ครั้งเดียว
    $x = 20;
    echo "x = " . x;
    echo "<br>";
    echo "\$x = " .$x;
?>
</font>
</body>
</html>