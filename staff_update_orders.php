<?php



include 'acasupport_head.php';



include 'con_config.php';







if(isset($_COOKIE['staffid'])){







if ($conn->connect_error) {







    die("Connection failed: " . $conn->connect_error);







}







else{







$i=0;



$size = count($_POST['orderid']);



$i_count=0;







while($i<$size){







$orderid=$_POST['orderid'][$i];

$Date=$_POST['Date'][$i];

$timeslot=$_POST['timeslot'][$i];

$tutorid=$_POST['tutorid'][$i];

$state=$_POST['state'][$i];

$location=$_POST['location'][$i];

$staffid=$_COOKIE['staffid'];

 if($timeslot=="8:30-9:30"){$timeslotinsert="1";}

 elseif($timeslot=="9:30-10:30"){$timeslotinsert="2";}

 elseif($timeslot=="10:30-11:30"){$timeslotinsert="3";}

 elseif($timeslot=="11:30-12:30"){$timeslotinsert="4";}

 elseif($timeslot=="12:30-13:30"){$timeslotinsert="5";}

 elseif($timeslot=="13:30-14:30"){$timeslotinsert="6";}

 elseif($timeslot=="14:30-15:30"){$timeslotinsert="7";}

 elseif($timeslot=="15:30-16:30"){$timeslotinsert="8";}


$location_Copy=$_POST['location_Copy'][$i];

$Date_Copy=$_POST['Date_Copy'][$i];

$timeslot_Copy=$_POST['timeslot_Copy'][$i];

$tutorid_Copy=$_POST['tutorid'][$i];

$state_Copy=$_POST['state_Copy'][$i];

$tutorid_Copy=$_POST['tutorid_Copy'][$i];

$userid_Copy = $_POST['userid_Copy'][$i];


if($Date != $Date_Copy or $timeslot != $timeslot_Copy or $tutorid != $tutorid_Copy or $state != $state_Copy or $location != $location_Copy ){

$query = "UPDATE orders set Date='$Date', time='$timeslotinsert', tutorid='$tutorid', state='$state' , location='$location' , modifyby='$staffid' where orderid='$orderid' and (Date !='$Date_Copy' or time !='$timeslotinsert' or tutorid != '$tutorid' or state !='$state' or location != '$location')";

$result=mysqli_query($conn, $query);

echo "<p>Successfully update order ID: ".$orderid."</p><br>";

$query2 = "select email from tutor where tutorid='$tutorid'";
$dup1 = mysqli_query($conn,$query2);
$row = mysqli_fetch_array($dup1);
$receiver=$row['email'];
include 'sendmail.php';



$query3 = "select email from users where userid='$userid_Copy'";
$dup3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_array($dup3);
$receiver=$row3['email'];
include 'sendmail.php';




$i_count++;



}



  



$i++;



}







if ($i_count == 1) {







?>



<div class="left-agileits-w3layouts same">



<a href="staffCheck.php"><input type="button" value="Back"></a>



</div>







<?php	



	echo "<br><p>Only one order was updated.</p>";







}











else {







?>



<div class="left-agileits-w3layouts same">



<a href="staffCheck.php"><input type="button" value="Back"></a>



</div>







<?php	



echo "<p>".$i_count." orders has updated.</p>";







}



















}







}



else{







	echo "<p>You should login firstly.  <a href=\"staffLoginIn.php\">Login</a></p>";







}











include 'acasupport_foot.php';



?>