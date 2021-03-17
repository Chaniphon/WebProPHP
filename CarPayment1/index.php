<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Index</title>
</head>
<body>
<center>
<form method="post" action="testcar.php">
    <img src = \WebProPHP\CarPayment\Pic\header.jpg width="920" height="399">
    
    <fieldset style="weight: 70%; margin: 0 auto;">
    <legend style= "margin: 0 auto;"><h1>Car Model</h1></legend>
    <p>เลือกรุ่นรถยนต์ <select  name="cars">
        <option value="Accord">Accord</option>
        <option value="Civic">Civic</option>
        <option value="Jazz">Jazz</option>
        <option value="City">City</option>
        </select>
        <input type="submit" value=" Submit "/></p>
            
        <table border="1" align="center" width="550">
        <tr>
            <td> ภาพรถยนต์ </td>
            <td>รุ่นรถยนต์</td>
            <td>ราคารถยนต์ (บาท)</td>
            <td>อัตราดอกเบี้ย ต่อปี (ร้อยละ, %)</td>
        </tr>
        <tr>
            <td><img src = \WebProPHP\CarPayment\Pic\Accord.png width="60%"></td>
            <td width="20%">Accord </td>
            <td width="20%">1,799,000</td>
            <td width="20%">2.00</td>
        </tr>
        <tr>
            <td><img src = \WebProPHP\CarPayment\Pic\Civic.png width="80%"></td>
            <td>Civic</td>
            <td>1,145,000</td>
            <td>2.00</td>
        </tr>
        <tr>
            <td><img src = \WebProPHP\CarPayment\Pic\Jazz.png width="60%"></td>
            <td>Jazz</td>
            <td>754,000</td>
            <td>4.00</td>
        </tr>
        <tr>
            <td><img src = \WebProPHP\CarPayment\Pic\City.png width="80%"></td>
            <td>City</td>
            <td>749,000</td>
            <td>4.00</td>
        </tr>

    </table>
    </fieldset>
</form>
</center>
</body>
</html>