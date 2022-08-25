<?php


include 'con_config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT DISTINCT Course FROM course";
$result = mysqli_query($conn, $sql);


while( $row = mysqli_fetch_array($result, MYSQLI_NUM) ){
    echo "<option value=\"".$row[0]."\" >";
}


?>