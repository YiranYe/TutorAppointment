<?php
include 'acasupport_head.php';
include 'con_config.php';

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

else{

if(isset($_COOKIE['userid'])){


echo "<p>Welcome ".$_COOKIE['name']. ":     <a href=\"studentLogout.php\">Logout</a></p>  ";

?>

<div class="left-agileits-w3layouts same">
				<a href="makeappointment.php" style="display.block;height:100px,width:100px"><input type="button" value="Make Appointment"></a>
			</div>
			
			<div class="right-agileinfo same">
				<a href="student_reserved.php" style="display.block;height:100%,width:100%"><input type="button" value="Reserved"></a>
			</div>
			<div class="clear"></div>

<?php


}

else{

if(!is_null($_POST['userid'])){
$userid = $_POST['userid'];
$password = hash("sha256", $_POST['password']);

$query="SELECT * FROM users WHERE userid='$userid'";
$dup = mysqli_query($conn,$query);
$row=mysqli_fetch_array($dup);


       if($row)

		{
			
            $dbuserid=$row['userid'];	
			$dbpassword=$row['password'];
			$dbname=$row['name'];
			$dbemail=$row['email'];
			$dbphone=$row['phone'];
			$dbyear=$row['year'];

			if ($password == $dbpassword) {

			setcookie("userid",$dbuserid, time()+600);
			setcookie("password", $dbpassword, time()+600);  
			setcookie("name", $dbname, time()+600);
			setcookie("dbemail", $dbemail, time()+600);
			setcookie("dbphone", $dbphone, time()+600);
			setcookie("year", $dbyear, time()+600);

			echo "<p>Welcome ".$dbname. ":     <a href=\"studentLogout.php\">Logout</a></p>  ";
			
?>

			<div class="left-agileits-w3layouts same">
				<a href="makeappointment.php"><input type="button" value="Make Appointment"></a>
			</div>
			
			<div class="right-agileinfo same">
				<a href="student_reserved.php"><input type="button" value="Reserved"></a>
			</div>
			<div class="clear"></div>
			

<?php

			}

				else{
					echo "<p>Password Wrong! <a href=\"studentLoginIn.php\">Login</a></p> ";

				}

        }

        else{
		
      
		echo "<p>No this user! <a href=\"studentLoginIn.php\">Login</a></p> ";
		
			}

}

else {echo "<script>url=\"studentLoginIn.php\";window.location.href=url;</script>";}



}

}
?>

			
<?php

include 'acasupport_foot.php';




?>

