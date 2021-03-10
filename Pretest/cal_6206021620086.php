<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
echo "<center>";
$fruit = $_POST['fruit'];
$kg = $_POST['kg'];
$width = $_POST['width'];

if($fruit == 1  ){
    $cost = 100;
    echo '<img src = image\pic1.jpg width ='.$width.'><br>';
    echo "ฝรั่ง ราคากิโลกรัมละ 100 บาท <br>";
    echo "จำนวนกิโลกรัม : " .$kg. '<br>';
    echo "ราคารวม : " .$cost*$kg;
}
else if($fruit == 2  ){
    $cost = 200;
    echo '<img src = image\pic2.jpg width ='.$width.'><br>';
    echo "มะม่วง ราคากิโลกรัมละ 200 บาท <br>";
    echo "จำนวนกิโลกรัม : " .$kg. '<br>';
    echo "ราคารวม : " .$cost*$kg;

}
else if($fruit == 3  ){
    $cost = 300;
    echo '<img src = image\pic3.jpg width ='.$width.'><br>';
    echo "ส้ม ราคากิโลกรัมละ 300 บาท<br>";
    echo "จำนวนกิโลกรัม : " .$kg. '<br>';
    echo "ราคารวม : " .$cost*$kg;

}

echo "<center><a href = form_6206021620086.php><button>Back to Home</button></a></center>";

echo "</center>";
?>
</body>
</html>