<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6-1</title>
</head>
<body>
    <?php
        $score = 50;
        $limit = 50;
        $name = "Nitigan";

        if ($score >= $limit) {
            echo "Student Name : $name <br>";
            echo "Student Score : $score <br>";
            echo "Student Status : Passed <br>";
        }
        else {
            echo "Student Name : $name <br>";
            echo "Student Score : $score <br>";
            echo "Student Status : Failed <br>";
    }
    ?>
</body>
</html>