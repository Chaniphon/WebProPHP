<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lab9-6 (modify) </title>
</head>
<body>
<?php
$month = array( array ( 2555, 230000, 300400, 200900,249000),
array ( 2556,300000, 380400, 290000,149000),
array ( 2557,330000, 350000, 400900,490000),
array (2558,380000, 395000, 290000,349000),
array (2559,335000, 400400, 300900,490000 ));

$title = array(" ปี","ไตรมาส 1","ไตรมาส 2","ไตรมาส 3","ไตรมาส 4","ผลรวมรายปี");
$maxRow = count( $month );
$maxCol = count ( $month[0]) ;
$sum = 0;
echo "<table border='1' align='center' width='100%'>";
echo "<tr>";
for ( $c = 0; $c < $maxCol ; $c++ ) {
    echo "<td width='50' align='center'>" . $title[$c] . "</td>";
}
echo "</tr>";

for ( $r = 0; $r < $maxRow ; $r++ ) {
    echo "<tr>";
    for ( $c = 0; $c < $maxCol ; $c++ ) {
        $sum += $row[$r] += $month[$r][$c+1];
        $col[$c] += $month[$c][$r+1];
        echo "<td width='50' align='center'>" . $month[$r][$c] . "</td>";
    }
    echo "<td width='50' align='center'>" . $row[$r] . "</td>";
    echo "</tr>";
}
echo '<tr>';
echo '<td><center> ผลรวมรายไตรมาส </center></td>';
for($r = 4; $r >= 1; $r--){
    echo '<td', $col[$r];
}
echo '<td>', $sum, '</td>';
echo '</tr>';
echo "</table>";
?>
</body>
</html>