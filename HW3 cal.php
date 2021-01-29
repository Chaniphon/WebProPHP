<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW3 Cal Grade</title>
</head>
<body>
    <h2><?php
    $assignment = $_POST['assignment'];
    $homework = $_POST['homework'];
    $midterm = $_POST['midterm'];
    $final = $_POST['final'];
    $score = 0;
    $grade;

    $score = $assignment+$homework+$midterm+$final;
    
    if ($assignment > 20) $assignment = 20;
    if ($homework > 20) $homework = 20;
    if ($midterm > 30) $midterm = 30;
    if ($final > 30) $final = 30;
    if ($score > 100) $score = 100;

    echo "Assignment = " .$assignment. "<br>";
    echo "Homework = " .$homework. "<br>";
    echo "Midterm = " .$midterm. "<br>";
    echo "Final = " .$final. "<br>";
    echo "Total Score = " .$score. "<br>";
   
    if( $score >= 80 ){
        echo "Your grade is : A";
   }else if( $score >= 70 && $score < 80 ){
        echo "Your grade is : B";
   }else if( $score >= 60 && $score < 70 ){
        echo "Your grade is : D";
   }else if( $score >= 50 && $score < 60 ){
        echo "Your grade is : D";
   }else{
        echo "Your grade is : F";
   }
    ?></h2>
    <a href="HW3.php"> Back </a>
</body>
</html>