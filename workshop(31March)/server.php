<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        echo("Connection failed" .mysqli_connect_error());
    }else {
        //echo("Connection Successfully");
    }
?>
 