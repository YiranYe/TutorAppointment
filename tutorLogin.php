<?php
include 'acasupport_head.php';
include 'con_config.php';

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

else{

if(isset($_COOKIE['tutorid'])){


echo "<p>Welcome ".$_COOKIE['tutor_name']. ":     <a href=\"tutorLogout.php\">Logout</a></p>  ";

?>


			
			<form action="tutor_reserved.php" method="post">
			<div class="left-agileits-w3layouts same">
				<div class="gaps">	
				<p>Orders State</p>
					<select class="form-control" name="Orders_State">
						<option value ="pending">Pending</option>
  						<option value ="confirmed">Confirmed</option>
  						<option value ="All">All</option>						
					</select>
				</div>
				
			</div>
			<div class="clear"></div>
						  <input type="submit" value="submit">
			</form>
			

<?php


}

else{


	if(!is_null($_POST['tutorid'])){
$tutorid = $_POST['tutorid'];
$password = hash("sha256", $_POST['password']);

$query="SELECT * FROM tutor WHERE tutorid='$tutorid'";
$dup = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($dup);

       if($row >0)

		{
			
            $dbtutorid=$row['tutorid'];	
            $dbpassword=$row['password'];
            $dbname=$row['name'];
			
			if ($password == $dbpassword) {

			setcookie("tutorid",$dbtutorid, time()+600);
			setcookie("tutor_name",$dbname, time()+600);

			echo "<p>Welcome ".$dbname. ":     <a href=\"tutorLogout.php\">Logout</a></p>  ";
			
?>

			
			
			<form action="tutor_reserved.php" method="post">
			<div class="left-agileits-w3layouts same">
				<div class="gaps">	
				<p>Orders State</p>
					<select class="form-control" name="Orders_State">
						<option value ="pending">Pending</option>
  						<option value ="confirmed">Confirmed</option>
  						<option value ="All">All</option>						
					</select>
				</div>
				
			</div>
			<div class="clear"></div>
						  <input type="submit" value="submit">
			</form>
			
			

<?php

			}

			else{
				echo "<p>Password Wrong! <a href=\"tutorLoginIn.php\">Login</a></p> ";
			

			}

        }

        else{

		echo "<script>url=\"tutorLoginIn.php\";window.location.href=url;</script>";
		
			}
}
else {echo "<script>url=\"tutorLoginIn.php\";window.location.href=url;</script>";}			

}

}
?>

			
<?php

include 'acasupport_foot.php';




?>

