<?php

include 'acasupport_head.php';

include 'con_config.php';



if(isset($_COOKIE['userid'])){



if ($conn->connect_error) {



    die("Connection failed: " . $conn->connect_error);



}



else{







$orderid = $_POST['orderid'];





$dup = mysqli_query($conn,"update orders set state='delete' where orderid='$orderid'");





        if($dup)



		{



            echo "<b><p>Delete Successfully.</b>- <a href=\"student_reserved.php\">Back to Reserved</a></p>";



        }



       else {

       	   echo "<b><p>System Error.</b>- <a href=\"student_reserved.php\">Back to Reserved</a></p>";

       }





}



}

else {

	echo "<p>You should login firstly.  <a href=\"studentLoginIn.php\">Login</a></p>";

}

include 'acasupport_foot.php';











?>