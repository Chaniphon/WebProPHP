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

    
    
     <form>
     <table border= "10" align="center">
     <tr>
     <td align="center">
     <?php
     
    
    if($_POST['cars'] == "Accord")
    { 
        echo '<img src = \WebProPHP\CarPayment\Pic\logo-accord.png alt= "" width="50%">';
        echo '<br><br>';
        echo '<img src = \WebProPHP\CarPayment\Pic\Accord.png alt= "" width="80%">';
        echo '</td>';
        echo '<td>';
    }

    /*if($_POST['cars'] == "Civic")
    { 
        echo '<img src = \WebProPHP\CarPayment\Pic\logo-civic.png alt= "" width="50%">';
        echo '<br><br>';
        echo '<img src = \WebProPHP\CarPayment\Pic\Civic.png alt= "" width="80%">';
        echo '</td>';
        echo '<td>';
    }

    if($_POST['cars'] == "Jazz")
    { 
        echo '<img src = \WebProPHP\CarPayment\Pic\logo-jazz.png alt= "" width="50%">';
        echo '<br><br>';
        echo '<img src = \WebProPHP\CarPayment\Pic\Jazz.png alt= "" width="80%">';
        echo '</td>';
        echo '<td>';
    }

    if($_POST['cars'] == "City")
    { 
        echo '<img src = \WebProPHP\CarPayment\Pic\logo-city.png alt= "" width="50%">';
        echo '<br><br>';
        echo '<img src = \WebProPHP\CarPayment\Pic\City.png alt= "" width="80%">';
        echo '</td>';
        echo '<td>';
    }*/
    ?>
   
     
     
    <fieldset>
    <legend> เลือกเงินดาวน์ </legend><br>
     เงินดาวน์
     <input type="radio" name="down_payment" id="percent" checked="checked">
     <label for= "percent">
     <select name="price" id="" onchange= "makeSelection('percent')">
    <option value= "" selected disabled hidden>...</option>
    <option value= "15"> 15% </option>
    <option value= "20"> 20% </option>
    <option value= "25"> 25% </option>
    <option value= "30"> 30% </option>
    </select></label>
    หรือ 
    <label for= "amount">
    ระบุจำนวนเงิน
    <input type="radio" name="down_payment" id="amount" checked="checked">
    <input type= "number" name= "amount" onchange= "makeSelection('amount')" placeholder= " ">
    </label>
    </fieldset><br>

    <fieldset>
    <legend> เลือกระยะเวลาการผ่อนชำระ </legend><br>
    ระยะเวลา
    <select name="mounth" id="">
    <option value= "" selected disabled hidden>...</option>
    <option value= "36"> 36 </option>
    <option value= "48"> 48 </option>
    <option value= "60"> 60 </option>
    <option value= "72"> 72 </option>
    <option value= "84"> 84 </option>
    </select>
    </fieldset>
    <center><br><br><input type="submit" value=" Calculate "/></center><br><br>
    
    
   </table>
   </form>
    
   
    
    
    
</body>
</html>