<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarSell</title>
</head>
<body>
<?php

    $cusname = $_POST['cusname'];
    $month = $_POST['month'];
    $select = $_POST['select'];
    $total = $month * $select;

echo '<table border="1" align="center" width="40%">';
echo '<tr><td> ชื่อ-นามสกุล ลูกค้า : </td><td><i> '.$cusname .'</i></td></tr>';
echo '<tr><td> จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด : </td><td><i> '.$month.' </i></td></tr>';
echo '<tr><td> จำนวนงวดที่ต้องการ : </td><td><i> '.$select.' </i></td></tr>';
echo '<tr><td> ยอดเงินรวม : </td><td><i> '.$total.' </i></td></tr>';
carCheck($total);
echo '<tr><td colspan = "2"><center><a href = CarPay.php><button>Back to Home</button></a></center></td></tr>';
echo '</table>';

function carCheck($total){
    if($total < 749000){
    
    echo '<tr><td colspan = "2"> ยอดเงินรวมของท่านไม่สามารถที่จะซื้อรถยนต์ได้ </td></tr>';
    }

    if($total >= 1179000){
        echo '<tr><td colspan = "2"> รถยนต์รุ่นที่สามารถเลือกซื้อได้ </td></tr>';
        echo '<tr><td><img src = \WebProPHP\Midterm\img\City.png width="300"><img src = \WebProPHP\Midterm\img\logo-city.png  width="150" align= "right"></td>';
        echo '<td width= "150"> ราคา 749,000 บาท </td></tr>';

        echo '<tr><td><img src = \WebProPHP\Midterm\img\Jazz.png width="270"><img src = \WebProPHP\Midterm\img\logo-jazz.png width="150"></td>';
        echo '<td width= "150"> ราคา 849,000 บาท </td></tr>';

        echo '<tr><td><img src = \WebProPHP\Midterm\img\Civic.png width="270"><img src = \WebProPHP\Midterm\img\logo-civic.png width="150"></td>';
        echo '<td width= "150"> ราคา 1,149,000 บาท </td></tr>';

        echo '<tr><td><img src = \WebProPHP\Midterm\img\Accord.png width="270"><img src = \WebProPHP\Midterm\img\logo-accord.png width="160"></td>';
        echo '<td width= "150"> ราคา 1,179,000 บาท </td></tr>';
    }

    if($total >= 749000 && $total < 849000){
        echo '<tr><td colspan = "2"> รถยนต์รุ่นที่สามารถเลือกซื้อได้ </td></tr>';
        echo '<tr><td><img src = \WebProPHP\Midterm\img\City.png width="400"><img src = \WebProPHP\Midterm\img\logo-city.png width="200"></td>';
        echo '<td width= "150"> ราคา 749,000 บาท </td></tr>';
    }

    if($total >= 849000 && $total < 1149000){
        echo '<tr><td colspan = "2"> รถยนต์รุ่นที่สามารถเลือกซื้อได้ </td></tr>';
        echo '<tr><td><img src = \WebProPHP\Midterm\img\City.png width="400"><img src = \WebProPHP\Midterm\img\logo-city.png width="200"></td>';
        echo '<td width= "150"> ราคา 749,000 บาท </td></tr>';

        echo '<tr><td><img src = \WebProPHP\Midterm\img\Jazz.png width="300"><img src = \WebProPHP\Midterm\img\logo-jazz.png width="200"></td>';
        echo '<td width= "150"> ราคา 849,000 บาท </td></tr>';
    }
    if($total >= 1149000 && $total < 1179000){
        echo '<tr><td colspan = "2"> รถยนต์รุ่นที่สามารถเลือกซื้อได้ </td></tr>';
        echo '<tr><td><img src = \WebProPHP\Midterm\img\City.png width="400"><img src = \WebProPHP\Midterm\img\logo-city.png width="200"></td>';
        echo '<td width= "150"> ราคา 749,000 บาท </td></tr>';

        echo '<tr><td><img src = \WebProPHP\Midterm\img\Jazz.png width="300"><img src = \WebProPHP\Midterm\img\logo-jazz.png width="200"></td>';
        echo '<td width= "150"> ราคา 849,000 บาท </td></tr>';

        echo '<tr><td><img src = \WebProPHP\Midterm\img\Civic.png width="400"><img src = \WebProPHP\Midterm\img\logo-civic.png width="200"></td>';
        echo '<td width= "150"> ราคา 1,149,000 บาท </td></tr>';
    }
}


?>
</body>
</html>