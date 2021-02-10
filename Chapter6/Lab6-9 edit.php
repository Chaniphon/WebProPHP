<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> edit Lab6-9 </title></head>
</head>
<body>
    <form action="#" method="get">
        Start Number : <input type="text" name="start" value=0>
        <br>
        End Number : <input type="text" name="end" value=0>
        <br>
        Divide by : <input type="text" name="divide" value=0>
        <br><br>
        <input type="submit" value="Submit">
        <br><br>
    </form>

    <?php
        $start = $_POST['start'];
        $end = $_POST['end'];
        $div = $_POST['div'];
        $count = 0;

        echo "ผลลัพธ์ของตัวเลขระหว่าง" .$start. "ถึง" .$end. "ที่หารด้วย" .$div. "ลงตัว คือ<br>";

        while($start > $end){
            if ($start % $div == 0) {
                echo $start. ",";
            }
            $start++;
        }

        
        
    ?>
</body>
</html>