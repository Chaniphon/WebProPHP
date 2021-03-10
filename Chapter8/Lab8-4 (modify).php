<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Cdoe</title>
</head>
<body>
<form method="post" action="Lab8-4 (modify).php">
<table border="1" align="center" width="400">
    <tr>
        <td colspan="2" align="center">
        <strong> Control Structure </strong>
        </td>
    <tr>
    <tr>
        <td align="right">Enter number row : </td>
        <td><input type="text" name="row" size="15" value=""> </td>
    </tr>
        <td align="right">Enter number column : </td>
        <td><input type="text" name="col" size="15" value=""></td>
    </tr>
    </tr>
        <td align="right">Enter start number : </td>
        <td><input type="text" name="start" size="15" value=""></td>
    </tr>
    </tr>
        <td align="right">Enter end number : </td>
        <td><input type="text" name="end" size="15" value=""></td>
    </tr>
    <br>
    <tr>
        <td colspan="2" align="center">
        <input type="submit" value=" OK " >
        <input type="reset" value=" Clear " >
        </td>
    </tr>
    <br>
</table>
<?php
$row = $_POST['row'];
$col = $_POST['col'];
$start = $_POST['start'];
$end = $_POST['end'];

$nummin = 0;
$nummax = 0;
$numavg = 0;

function page_header($title, $bgcolor = "ffffff") {
    echo '<html lang="en"><head><meta charset="UTF-8">';
    echo '<title>' . $title . '</title></head>';
    echo '<body bgcolor="#' . $bgcolor . '">';
}
// declare function page_footer

function check_min($min, $random){
    if ($min < $random){
        return $min;
    }
    return $random;
}
function check_max($max, $random){
    if ($max > $random){
        return $max;
    }
    return $random;
}
function check_avg($total, $num){
    $total = $total / $num;
    echo "Average : $total";
}

// declare function checker
function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2, $start, $end) {
    echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
    echo '<table align="center" border="1">' ;

    for($r = 1; $r <= $maxRow; $r++){
        $total = 0;
        echo '<tr >';
    for($c = 1; $c <= $maxCol; $c++) {
        
            if ( $r % 2 == 1) {
                echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
            }
            else {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
            }

            $random = rand($start, $end);
            if($r == 1){
                $min = $random;
                $max = $random;
            }
            echo $random . '</td>';
            $total += $random;
            $min = check_min($min, $random);
            $max = check_max($max, $random);
        }
        echo '</tr>';
    }
    echo '</table>';
    
    echo "Minimum : ".$min.'<br>';
    echo "Maximum : ".$max.'<br>';
    check_avg($maxCol * $maxRow , $total);
    
}

page_header("Example 8-4", "FFDDEE");
show_checker($row, $col,"33ff99","ffff99", $start, $end);

?>
</body>
</html>