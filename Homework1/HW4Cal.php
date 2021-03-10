<!DOCTYPE html>
<html lang="en">
<head><title>Result of Calculation</title></head>
<body>
<?php
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];

$credit1 = $_POST['credit1'];
$credit2 = $_POST['credit2'];
$credit3 = $_POST['credit3'];
$credit4 = $_POST['credit4'];
$credit5 = $_POST['credit5'];

$grade1 = $_POST['grade1'];
$grade2 = $_POST['grade2'];
$grade3 = $_POST['grade3'];
$grade4 = $_POST['grade4'];
$grade5 = $_POST['grade5'];

$gpa = 0;
$allcredits = $credit1 + $credit2 +$credit3 + $credit4 +$credit5 ;

echo "<table align='center' width='50%' border='1'>";
echo "<tr><td colspan='6' align='center'><b><br>Grade Period Average (GPA)</b><br><br></td></tr>";
echo "<tr><td>Subject 1 :</td><td> <i> $sub1 </i> </td>";
echo "<td>Credit 1 :</td><td> <i> $credit1 </i> </td>";
echo "<td>Grade 1 :</td><td> <i> $grade1 </i> </td></tr>";

echo "<tr><td>Subject 2 :</td><td> <i> $sub2 </i> </td>";
echo "<td>Credit 2 :</td><td> <i> $credit2 </i> </td>";
echo "<td>Grade 2 :</td><td> <i> $grade2 </i> </td></tr>";

echo "<tr><td>Subject 3 :</td><td> <i> $sub3 </i> </td>";
echo "<td>Credit 3 :</td><td> <i> $credit3 </i> </td>";
echo "<td>Grade 3 :</td><td> <i> $grade3 </i> </td></tr>";

echo "<tr><td>Subject 4 :</td><td> <i> $sub4 </i> </td>";
echo "<td>Credit 4 :</td><td> <i> $credit4 </i> </td>";
echo "<td>Grade 4 :</td><td> <i> $grade4 </i> </td></tr>";

echo "<tr><td>Subject 5 :</td><td> <i> $sub5 </i> </td>";
echo "<td>Credit 5 :</td><td> <i> $credit5 </i> </td>";
echo "<td>Grade 5 :</td><td> <i> $grade5 </i> </td></tr>";

echo "<tr><td colspan='5' align='center'>GPA </b></td>";

/*echo "<tr><td></td><td><td><td><td><td> <i> ";*/


switch ($grade1) {
    case "A":
        $grade1 = 4;
      /*echo $grade1;*/
    break;
    case "B+":
        $grade1 = 3.5;
          /*echo $grade1;*/
    break;
    case "B":
        $grade1 = 3;
      break;
    case "C+":
        $grade1 = 2.5;
    break;
    case "C":
        $grade1 = 2;
    break;
    case "D+":
        $grade1 = 1.5;
    break;
    case "D":
        $grade1 = 1;
    break;
    case "F":
        $grade1 = 0;
    break;
    default:
      /*echo "Your favorite color is neither red, blue, nor green!";*/
  }

  switch ($grade2) {
    case "A":
        $grade2 = 4;
      /*echo $grade1;*/
    break;
    case "B+":
        $grade2 = 3.5;
          /*echo $grade1;*/
    break;
    case "B":
        $grade2 = 3;
      break;
    case "C+":
        $grade2 = 2.5;
    break;
    case "C":
        $grade2 = 2;
    break;
    case "D+":
        $grade2 = 1.5;
    break;
    case "D":
        $grade2 = 1;
    break;
    case "F":
        $grade2 = 0;
    break;
    default:
      /*echo "Your favorite color is neither red, blue, nor green!";*/
  }

  switch ($grade3) {
    case "A":
        $grade3 = 4;
      /*echo $grade1;*/
    break;
    case "B+":
        $grade3 = 3.5;
          /*echo $grade1;*/
    break;
    case "B":
        $grade3 = 3;
      break;
    case "C+":
        $grade3 = 2.5;
    break;
    case "C":
        $grade3 = 2;
    break;
    case "D+":
        $grade3 = 1.5;
    break;
    case "D":
        $grade3 = 1;
    break;
    case "F":
        $grade3 = 0;
    break;
    default:
      /*echo "Your favorite color is neither red, blue, nor green!";*/
  }

  switch ($grade4) {
    case "A":
        $grade4 = 4;
      /*echo $grade1;*/
    break;
    case "B+":
        $grade4 = 3.5;
          /*echo $grade1;*/
    break;
    case "B":
        $grade4 = 3;
      break;
    case "C+":
        $grade4 = 2.5;
    break;
    case "C":
        $grade4 = 2;
    break;
    case "D+":
        $grade4 = 1.5;
    break;
    case "D":
        $grade4 = 1;
    break;
    case "F":
        $grade4 = 0;
    break;
    default:
      /*echo "Your favorite color is neither red, blue, nor green!";*/
  }

  switch ($grade5) {
    case "A":
        $grade5 = 4;
      /*echo $grade1;*/
    break;
    case "B+":
        $grade5 = 3.5;
          /*echo $grade1;*/
    break;
    case "B":
        $grade5 = 3;
      break;
    case "C+":
        $grade5 = 2.5;
    break;
    case "C":
        $grade5 = 2;
    break;
    case "D+":
        $grade5 = 1.5;
    break;
    case "D":
        $grade5 = 1;
    break;
    case "F":
        $grade5 = 0;
    break;
    default:
      /*echo "Your favorite color is neither red, blue, nor green!";*/
  }
    
    $all1 = $credit1 * $grade1 ;
    $all2 = $credit2 * $grade2 ;
    $all3 = $credit3 * $grade3 ;
    $all4 = $credit4 * $grade4 ;
    $all5 = $credit5 * $grade5 ;
    $gpa = ($all1+$all2+$all3+$all4+$all5)/$allcredits;
    $digit = number_format($gpa, 2, '.', '');


/*for($n = $number1 ; $n <= $number2 ; $n++)
{
$sum += $n;
echo "<tr><td>Sumation of 1 to $n :</td><td><i> $sum </i> </td></tr>";
}
echo "<tr><td></td><td> <i> ";*/
echo "<td> <i> $digit</i> </td></tr>";
echo "<tr><td colspan='5'></td><td><i>";

?>
<a href="HW4.php"> Back </a>
</body>
</html>
