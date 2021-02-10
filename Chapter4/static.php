<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function myTest(){
        static $x = 0;     //ไม่ใช้static จะคืนค่า defineใหม่เป็น0 : staticทำ$x++
        echo $x." , ";
        $x++;
    }

    myTest();   //output = 0 , x = 1

    myTest();   //output = 1 , x = 2

    myTest();   //output = 2 , x = 3


    ?>
</body>
</html>