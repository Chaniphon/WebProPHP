<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 2</title>
</head>
<body>
<center><h1> HW2 : Sum of Number <br><br></h1>
<h2><form method="post" action="HW2.php" target="iframe_target">
Num 1 : <input type="text" name="num1" required> <br><br>
<input type="radio" name="operator1" value="+"> + :
<input type="radio" name="operator1" value="-"> - :
<input type="radio" name="operator1" value="*"> * :
<input type="radio" name="operator1" value="/"> / :
<br><br>

Num 2 : <input type="text" name="num2" required> <br><br>
<input type="radio" name="operator2" value="+"> + :
<input type="radio" name="operator2" value="-"> - :
<input type="radio" name="operator2" value="*"> * :
<input type="radio" name="operator2" value="/"> / :
<br><br>

Num 3 : <input type="text" name="num3" required> <br><br>
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

if (isset($_POST['operator1'])) {
    $operator1 = $_POST['operator1'];
} else {
    $operator1 = '';
}
if (isset($_POST['operator2'])) {
    $operator2 = $_POST['operator2'];
} else {
    $operator2 = '';
}
$result = '';
$all ='';

switch ($operator1) {
    case "+":{
        $result  = $num1 + $num2;
            switch ($operator2) {
            case "+":{
                $all = $result + $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "-":{
                $all = $result - $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "*":{
                $all = $result * $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "/":{
                $all = $result / $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
        }
      
    }
    break;

    case "-":{
        $result  = $num1 - $num2;
            switch ($operator2) {
            case "+":{
                $all = $result + $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "-":{
                $all = $result - $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "*":{
                $all = $result * $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "/":{
                $all = $result / $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
        }
    }
        
    break;

    case "*":{
        $result  = $num1 * $num2;
            switch ($operator2) {
            case "+":{
                $all = $result + $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "-":{
                $all = $result - $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "*":{
                $all = $result * $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "/":{
                $all = $result / $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
        }
    }
        
    break;

    case "/":{
        $result  = $num1 / $num2;
            switch ($operator2) {
            case "+":{
                $all = $result + $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "-":{
                $all = $result - $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "*":{
                $all = $result * $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
            case "/":{
                $all = $result / $num3;
                echo"<p align = center>  Result of number = $all </p>" ;
            }
            break;
        }
    }
        
    break;
    default:
}
?>
</body>
</html>