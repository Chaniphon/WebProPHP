<!DOCTYPE html>
<html lang="en">
<head><title> Homework 3</title></head>
<center>
<body>

<?php
    if(isset($_GET['btnChecknum'])) {
        $start = $_GET['start'];
        $stop = $_GET['stop'];
        $divide = $_GET['divide'];
        $numbers = [];


            for($i = $start ; $i <= $stop ; $i++){
                $num = $i;
                if($num % $divide == 0){
                    array_push($numbers, $num);
                }
                
            }

        function checkNum($start, $stop, $divide, $numbers){
           
            
           $max = count($numbers);
            
            for($n = 0 ; $n < $max ; $n++){
                 echo $numbers[$n].", ";
        
            }
        }

        function countNum($numbers){
            $max = count($numbers);
            echo "จำนวนที่หารลงตัว = ".$max." ตัว";
            
        }

        function sumNum($numbers){
            echo "ผลรวมของตัวเลขที่หารลงตัว = ".array_sum($numbers);
            
        }

        echo '<form method="get" action="numloop.php">';
        echo "ค่าเริ่มต้น : ";
        echo '<input type="text" name="start" size="15" value="" required />';
        echo "</br></br>";
        echo "ค่าสุดท้าย : ";
        echo '<input type="text" name="stop" size="15" value="" required />';
        echo "</br></br>";
        echo "ตัวเลขที่นำไปหาร :"; 
        echo '<input type="text" name="divide" size="15" value="" required />';
        echo "</br></br>";
        echo '<input name = " btnChecknum" type="submit" value=" CheckNum" />';
        echo "</br></br>";
        echo "ตัวเลขเริ่มต้น : " .$start."</br>";
        echo "ตัวเลขสุดท้าย : " .$stop."</br>";
        echo "ตัวเลขที่นำไปหาร : " .$divide."</br>";
        echo "</br></br>";
        checkNum($start, $stop, $divide, $numbers);
        echo "</br></br>";
        countNum($numbers);
        echo "</br></br>";
        sumNum($numbers);
        
    }
    else{

?>

        <form method="get" action="numloop.php">
        ค่าเริ่มต้น : 
        <input type="text" name="start" size="15" value="" required />
        <br><br>

        ค่าสุดท้าย : 
        <input type="text" name="stop" size="15" value="" required />
        <br><br>

        ตัวเลขที่นำไปหาร : 
        <input type="text" name="divide" size="15" value="" required />
        
        <br><br>
       
        <input name = " btnChecknum" type="submit" value=" CheckNum" />
        <input name = " btnReset" type="reset" value=" reset" />

</form>
<?php

    }

?>

</body>
</center>
</html>