<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ผลลัพธ์ ตัวอย่าง Control statement ที่12 </title>
</head>
<body>
<?php
    $row = $_POST['row'];
    $column = $_POST['column'];
    $rowMax = intval( $row); //แปลงเป็นinteger
    $colMax = intval( $column);

    echo "<table align='center' border='4' width='300'>";
    for($r = 1; $r <= $rowMax ; $r++) { //สร้างrow
        echo "<tr>"; //สร้างแถว
        for($c = 1; $c <= $colMax ; $c++) { //สร้างcol
            /*echo "<td align='center'>";
            echo rand(1,99);
            echo </font></td>*/
            
            $rand = rand(1,99);
            if($rand % 2 == 0){
                echo "<td align='center'><font color='blue'> $rand</font></td>";
            }
                else {
                echo "<td align='center'><font color='red'> $rand </font></td>";
            }
        }

            /*if ($r == $c)
                echo "<td align='center'><font color='#b2393e'> $r,$c </font></td>";
            else echo "<td align='center'> $r,$c </td>";*/
    
        echo "</tr>"; //ปิดการสร้างแถว
    }
    echo "</table>";
?>
<a href='Lab6-12.php'> Back </a>
</body>
</html>