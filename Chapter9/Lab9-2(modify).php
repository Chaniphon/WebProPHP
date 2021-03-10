<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lab9-2 (modify) </title>
</head>
<body>
<form method="post" action="Lab9-2(modify).php">
    <table border="1" align="center" width="400">
        <tr>
            <td colspan="2" align="center">
            <big><strong> Grade </strong></big>
            </td>
        </tr>
        <tr>
        <td align="right">จำนวนนักเรียน : </td>
        <td><input type="number" name="std" size="15" > </td>
        </tr>
        <tr>
        <td colspan="2" align="center">
        <input name = "ok" type="submit" value=" OK " >
        <input type="reset" value=" Clear " >
        </td>
        </tr><br>
    </table>
    </form>
<?php
  //$std = $_POST['std'];
  $std = (isset($_GET['std'])) ? $_GET['std'] : '';
  $score = array();
  $score1 = array(0,0,0,0,0);
  $score2 = array('A', 'B', 'C', 'D', 'F');
  

    for($n = 0 ; $n < $std; $n++) {
        $score[$n] = rand(0, 100);
    }
    echo '<br><br><center><font size="4" color="blue"> Grade Report </font></center>';
 
    echo '<table border="1" align="center">';
    echo '<tr><td align="center" width="90">Student No.</td>';
    echo '<td align="center" width="90">Score</td>';
    echo '<td align="center" width="90">Grade</td></tr>';
    for($n = 0 ; $n < $std; $n++) {
        echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
        echo '<td align="center" width="90">' . $score[$n] . '</td>';
        echo '<td>';
        if ($score[$n] >= 80) {
            $score1[0]++;
            echo "A";
        }
        
        elseif ($score[$n] >= 70) {
            $score1[1]++;
            echo "B";
        }
       
        elseif ($score[$n] >= 60) {
            $score1[2]++;
            echo "C";
        }
     
        elseif ($score[$n] >= 50) {
            $score1[3]++;
            echo "D";
        }
        elseif ($score[$n] <= 49) {
            $score1[4]++;
            echo "F";
        }
        echo '</td>';
        echo '</tr>';
        }
    
    
    echo '<tr><td colspan="3" align="center"> Maximum Score : ';
    echo max($score);
    echo '<tr><td colspan="3" align="center"> Minimum Score : ';
    echo min($score);
    echo '<tr><td colspan="3" align="center"> Average Score : ';
    echo average($score, $std);
    echo '</td></tr></table>';

    function average($data, $max) {
        $total = 0;
        for($n = 0 ; $n < $max; $n++) {
            $total += $data[$n];
        }
        return( $total / $max );
    }
    
      

    echo '<table border="1" align="center" width="23%">';
    echo '<tr>';
    echo '<td>Grade</td>';
    echo '<td>total</td>';
    echo '</tr>';
    for($i = 0; $i < 5; $i++){
        

        echo '<tr>';
        echo '<td>'.$score2[$i].'</td>';
        echo '<td>'.$score1[$i].'</td>';
        echo '</tr>';
    }
    
    echo '</table>';


    ?>
    </body>
    </html>