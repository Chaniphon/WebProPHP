<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    /*$min = $_GET['min'];*/
    $max = $_GET['max'];
    $avg = $_GET['avg']; 
  

   /* findmax(){
    if($num1 > $num2){
        echo $num1;
    }
    elseif($num2 > $num3){
        echo $num2;
    }
    else {
        echo $num3;
    }
    */

    if ($avg == "Average")
    echo ($num1 + $num2 + $num3)/3 ." </i> </td></tr>";

    if($max == "Maximum"){
        if($num1 > $num2){
            return($num1);
        }
            else if($num2 > $num3){
                return($num2);
            }
            else;

    }
   
    
?>
</body>
</html>