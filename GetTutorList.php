<?php 

    include 'con_config.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $q = $_REQUEST["q"];
    $sql = "SELECT * FROM course WHERE Course IN ('".$q."')";
    $result = mysqli_query($conn, $sql);
    echo "<option value=\"pending\" >";
    // while( $row = mysql_fetch_array($result) ){
    //     echo "<option value=\"".$row['Tutor']."\" >";
    // }
    while( $row = mysqli_fetch_array($result, MYSQLI_BOTH) ){
        echo "<option value=\"".$row['Tutor']."\" >";
    }


    // $tutor = "";
    // if ($q == "ACCT 2210") {
    //     $tutor = "GUo";
    // }
    // elseif ($q == "ACCT 3220") {
    //     $tutor = "hangzhi";
    // }
    // elseif ($q == "BIO 1000") {
    //     $tutor = "fisher";
    // }
    // else {
    //     $tutor = "yiran";
    // }

    // echo "<option value=\"$tutor\" >";


    // foreach($tutor_list as $tutor) {
    //     echo "<option value=\"$tutor\" >";
    // }
?>