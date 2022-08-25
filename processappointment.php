<?php
include 'acasupport_head.php';
include 'con_config.php';


if(isset($_COOKIE['userid'])){

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

else{
$userid = $_COOKIE['userid'];
$date = $_POST['date'];
$time = $_POST['time'];
$state = "pending";
$course = $_POST['course'];
$question = $_POST['question'];



$tomorrow=date("Y/m/d",intval(time())+3600*24);



if($_POST['prefertutor']==""){
$prefertutor = "pending";
}
else{
$prefertutor = $_POST['prefertutor'];
}
$location = 'D209';

echo "<p>Welcome ".$_COOKIE['name']. ":     <a href=\"studentLogout.php\">Logout</a></p>  ";

if($date==$tomorrow){

	echo "<br><br><p>You only can choose the day after tomorrow! Select date again! <a href=\"makeappointment.php\">Back</a></p>";

}
else{
$query = "insert into orders values(NULL,'$userid','$date','$time','$prefertutor','$state','$course','$question','$location','$userid')";
$query2 = "select email from tutor where name='$prefertutor'";
$dup = mysqli_query($conn,$query);
$dup1 = mysqli_query($conn,$query2);
$row = mysqli_fetch_array($dup1);
if($dup){

	echo "<br><br><p>Revservation Submited Successfully! GO to \"Reversed\" to check your revservation to check the state (pending or confirmed).</p><a href=\"student_reserved.php\"><input type=\"button\" value=\"Reserved\"></a>";

if ($prefertutor=="pending") {
	$receiver="568406199@qq.com";
	include 'sendmail.php';
}
else {

	$receiver=$row['email'];
	
	include 'sendmail.php';
}


}
else {

	echo "<p>Failed, please submit again!</p>";
}
}




        
}




}

else{

echo "<p>You should login firstly.  <a href=\"studentLoginIn.php\">Login</a></p>";

}



//}
include 'acasupport_foot.php';





?>