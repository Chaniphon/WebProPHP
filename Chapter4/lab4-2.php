<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4-2</title>
</head>
<body>
    <?php
        $x = 123;
        $y = "abc";
        echo "$ x = "; echo $x; echo "<br />";
        echo "$ y = "; echo $y; echo "<br />";

        //$x = &$y;   //& : pass by reference 
        echo "$ x = &$ y <br />";
        echo "$ x = "; echo $x; echo "<br />";
        echo "New value $ x<br />";

        $x = "php";     //ให้ค่าใหม่กับx จากเดิมเป็นabc
        echo "$ x = "; echo $x; echo "<br />";
        echo "$ y = "; echo $y; echo "<br />";
        echo "New value $ y<br />";

        $y = 100;
        echo "$ x = "; echo $x; echo "<br />";
        echo "$ y = "; echo $y; echo "<br />";
    ?>
</body>
</html>