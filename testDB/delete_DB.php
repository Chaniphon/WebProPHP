<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $name = $_POST['name'];

    // Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "DROP DATABASE $name";
if (mysqli_query($conn, $sql)) {
    echo "Database delete successfully";
} else {
    echo "Error delete database: " . mysqli_error($conn);
}
$sql = "SHOW DATABASES";
$result =  mysqli_query($conn, $sql);
echo '<br>';
while($row = mysqli_fetch_row($result)){
    echo $row[0].'<br>';
}

mysqli_close($conn);

    
?>