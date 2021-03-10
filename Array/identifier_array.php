<?php
    $funArray=array("A","B","C","D");
    print_r($funArray);
    echo "<br";
    for($i=0 ; $i < count($funArray); $i++){
        echo "index[".$i."] = ".$funArray[$i]."<br>";
    }
    echo "<br> Test For Each";
    foreach($funArray as $value){
        echo $value. "<br>";
    }
?>