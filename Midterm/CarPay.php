<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarPay</title>
</head>
<body>
<form method="post" action="CarSell.php">
<table border="1" align="center" width="400">
    
    <tr>
        <td> ชื่อ-นามสกุล ลูกค้า : </td>
        <td><input type="text" name="cusname" size="20" value=""/> </td>
    </tr>
    <tr>
        <td> จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด : </td>
        <td><input type="text" name="month" size="20" value=""/></td>
    </tr>
    <tr>
        <td> จำนวนงวดที่ต้องการ : </td>
        <td>
        <select  name="select">
        <option value=" 36 ">36 งวด</option>
        <option value=" 48 ">48 งวด</option>
        <option value=" 60 ">60 งวด</option>
        <option value=" 72 ">72 งวด</option>
        </select></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" value=" ซื้อรถ " />
        </td>
    </tr>
</table>
</form>
</body>
</html>