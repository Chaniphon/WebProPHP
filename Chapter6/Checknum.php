<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> testNumber </title></head>
</head>
<body>
    <h2>Check Number</h2>
    <form action="#" method="get">
        <input type="text" name="number" value=0>
        <br>
        <input type="submit" value="check num">
        <br><br>
        
    </form>
    <?php
        $num=0;
        $odd= 0;
        $even = 0;
        $zero = 0;
        $num = $_GET['number'];
        echo "<br> Num is ".$num. "<br>";

        while($num > 0){
            $checkNum = $num % 10;
            
            if($checkNum % 2 == 0 && $checkNum > 0){
                $even++;
            } 
            else if($checkNum % 2 !== 0){
                $odd++;
            }
            else if($checkNum == 0){
                $zero++;
            }
            $num = (int)($num / 10);
        }
        echo "Exit while <br>";

        echo "<table border=1>";
        echo "<tr><td>Odd = </td>";
        echo "<td>".$odd."</td>";
        echo "</tr>";
        echo "<tr><td>Even = </td>";
        echo "<td>".$even."</td>";
        echo "</tr>";
        echo "<tr><td>Zero = </td>";
        echo "<td>".$zero."</td>";
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>