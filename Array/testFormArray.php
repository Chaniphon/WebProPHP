<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Array</title>
</head>
<body>
<form method='post' action='#'>
<table border= 1>
<?php
    for($i = 0; $i < 10; $i++){
        echo '<tr><td>';
        echo '<input name= cars[] placeholder= "Enter Car Name">';
        echo '</td></tr>';
    }
?>
<tr><td>
    <button name= "submit"> Submit Infomation</button>
</td></tr>
</form>
</table>

<?php
if(isset($_POST["submit"])){
    $cars = $_POST['cars'];

    foreach($cars as $showCar):
        echo $showCar. "<br>";
    endforeach;
    print_r($cars);
}

?>

</body>
</html>