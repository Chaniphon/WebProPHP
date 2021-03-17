<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function makeSelection(radioid){
            document.getElementById(radioid).checked = true
        }
    </script>
</head>
<body>
<?php
      $test = $_POST['$test'];
        
    
    
       
    
    
  
    echo '<form action= "" method= "post">';
    echo '<table border= "10" align="center">';
    echo '<tr>';
    echo '<td align="center">';    
    echo '<img src = \WebProPHP\CarPayment\Pic\logo-accord.png alt= "" width="50%">';    
    echo '<br><br>';
    echo '<img src = \WebProPHP\CarPayment\Pic\Accord.png alt= "" width="90%">';
    echo '</td>';
    echo '<td>';
    echo '<fieldset>';
    echo '<legend> เลือกเงินดาวน์ </legend><br>';
    echo "เงินดาวน์"; 
    echo '<input type="radio" name="down_payment" id="percent" checked="checked">';
    echo '<label for= "percent">';
    echo '<select name="price" id="" onchange= "makeSelection("percent")">';
    echo '<option value= "" selected disabled hidden>...</option>';
    echo '<option value= "15"> 15% </option>';
    echo '<option value= "15"> 20% </option>';
    echo '<option value= "15"> 25% </option>';
    echo '<option value= "15"> 30% </option>';
    echo '</select></label>';
    echo "หรือ"; 
    echo '<label for= "amount">';
    echo "ระบุจำนวนเงิน";
    echo '<input type="radio" name="down_payment" id="amount" checked="checked">';
    echo '<input type= "number" name= "amount" onchange= "makeSelection("amount")" placeholder= " ">';
    echo '</label>';
    echo '</fieldset><br>';

    echo '<fieldset>';
    echo '<legend> เลือกระยะเวลาการผ่อนชำระ </legend><br>';
    echo "ระยะเวลา";
    echo '<select name="mounth" id="">';
    echo '<option value= "" selected disabled hidden>...</option>';
    echo '<option value= "36"> 36 </option>';
    echo '<option value= "48"> 48 </option>';
    echo '<option value= "60"> 60 </option>';
    echo '<option value= "72"> 72 </option>';
    echo '<option value= "84"> 84 </option>';
    echo '</select>';
    echo '</fieldset>';
    echo '<center><br><br><input type="submit" value=" Calculate "/></center><br><br>';
    echo '<table border = "5" align = "center" width = "450">';
    echo '<tr><td colspan = "2" align = "center">'; 
    echo "รายงานการคำนวณสินเชื่อผ่อนชำระ";
    echo '</td></tr>';
    echo '<td>รุ่นรถยนต์ : </td><td>Accord</td>';
    echo '<tr><td>ราคารถยนต์ : </td><td>1,799,000 บาท</td></tr>';
    echo '<tr><td>(1)เงินดาวน์ : </td>';
    echo '<td>';
    echo "test".$test;
    echo '</td></tr>';
    echo '<tr><td>(2)จำนวนเงินที่ขอสินเชื่อ : </td>';
    echo '<td>';
    installment($price);
    echo '</td></tr>';
    echo '</table>';
    echo '</table>';

    

    function DownPayment($price){
        $payment = 1799000 * $price;     
    }

    function installment($price){
        $install = 1790000 - $price;
    }

    echo '</form>';
    
   
    
    ?>




    
</body>
</html>