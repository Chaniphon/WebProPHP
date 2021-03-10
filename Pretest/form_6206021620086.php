<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testForm</title>
</head>
<body>
<center>
<form method="post" action="cal_6206021620086.php">
<p>
    Width : <input type="number" name=" width" min = "100" max = "500"><br>
    
</p>
<p><br>
    เลือกผลไม้ :
        <select  name="fruit">
        <option value=" text ">เลือกผลไม้</option>
        <option value=" 1 ">ฝรั่ง</option>
        <option value=" 2 ">มะม่วง</option>
        <option value=" 3 ">ส้ม</option>
        </select><br>
</p>
<p>
    จำนวนกิโลกรัม :
    <input type="radio" name="kg" value ="1" /> 1 kg
    <input type="radio" name="kg" value ="2" /> 2 kg
    <input type="radio" name="kg" value ="3" /> 3 kg
</p><br>

<input type="submit" value=" Submit ">

<p> ฝรั่ง ราคากิโลกรัมละ 100 บาท <br>
มะม่วง ราคากิโลกรัมละ 200 บาท <br>
ส้ม ราคากิโลกรัมละ 300 บาท <br>
</center>
</form>
</body>
</html>