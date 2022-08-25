<?php

include 'acasupport_head.php';

include 'con_config.php';


if(isset($_COOKIE['tutorid'])){


if ($conn->connect_error) {


    die("Connection failed: " . $conn->connect_error);



}

else{

$i=0;

$size = count($_POST['orderid']);

$i_count=0;


while($i<$size){

$orderid=$_POST['orderid'][$i];

$state=$_POST['state'][$i];

$state_Copy=$_POST['state_Copy'][$i];

$tutorid=$_COOKIE['tutorid'];

$userid_Copy = $_POST['userid_Copy'][$i];



if($state != $state_Copy){

$query = "UPDATE orders set state='$state',modifyby='$tutorid' where orderid='$orderid' and  state !='$state' ";

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
<a href="tutorCheck.php"><input type="button" value="Back"></a>
</div>
<?php	

echo "<br><p>Only one order was updated.</p>";

}

else {

?>

<div class="left-agileits-w3layouts same">

<a href="tutorCheck.php"><input type="button" value="Back"></a>

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