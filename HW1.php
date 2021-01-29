<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 1</title>
</head>
<body>
<center><h1> HW1 : Find Min Max Average <br></h1>
<h2><form method="post" action="HW1.php" target="iframe_target">
Num 1 : <input type="text" name="num1" required> <br>
<br>
Num 2 : <input type="text" name="num2" required> <br>
<br>
Num 3 : <input type="text" name="num3" required> <br>
<br>

<input type="radio" name="min" value ="Minimum"> Minimum <br>
<input type="radio" name="max" value ="Maximum"> Maximum <br>
<input type="radio" name="avg" value ="Average"> Average <br>
<br>

<input type="submit" value=" Submit " />
<input type="reset"  value=" Clear " />
</form></h2>
</center>

<?php
       
    if (isset($_POST['num1'])) {
        $num1 = $_POST['num1'];
    } else {
        $num1 = '';
    }
    if (isset($_POST['num2'])) {
        $num2 = $_POST['num2'];
    } else {
        $num2 = '';
    }  
    
    if (isset($_POST['num3'])) {
        $num3 = $_POST['num3'];
    } else {
        $num3 = '';
    }

    if (isset($_POST['avg'])) {
        $avg = $_POST['avg'];
    } else {
        $avg = '';
    }

    if (isset($_POST['min'])) {
        $min = $_POST['min'];
    } else {
        $min = '';
    }

    if (isset($_POST['max'])) {
        $max = $_POST['max'];
    } else {
        $max = '';
    }
           
    if ($avg == "Average"){
    $a = ($num1 + $num2 + $num3)/3;
    $aa = number_format($a, 3, '.', '');
    echo "<p align = center> Average value = $aa </p>";
    }

    elseif ($min == "Minimum"){
        $b = min($num1, $num2, $num3);
        echo "<p align = center> Minimum number = $b </p>";
    }
    elseif ($max == "Maximum"){
        $c = max($num1, $num2, $num3);
        echo "<p align = center> Maximum number = $c </p>";
    }
    
?>
</body>
</html>