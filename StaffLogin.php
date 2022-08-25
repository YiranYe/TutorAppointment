<?php
include 'acasupport_head.php';
include 'con_config.php';

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

else{

if(isset($_COOKIE['staffid'])){


echo "<p>Welcome ".$_COOKIE['staffid']. ":     <a href=\"staffLogout.php\">Logout</a></p><br>  ";
echo "<p>View Students Information: "." <a href=\"staff_view_student.php\" target=\"view_window\">Student Information</a></p>";

?>


			
			<form action="staff_reserved1.php" method="post">
			<div class="left-agileits-w3layouts same">
				<div class="gaps">	
				<p>Orders State</p>
					<select class="form-control" name="Orders_State">
						<option value ="pending">Pending</option>
  						<option value ="confirmed">Confirmed</option>
  						<option value ="decline">Decline</option>
  						<option value ="All">All</option>						
					</select>
				</div>
				
			</div>
			<div class="clear"></div>
						  <input type="submit" value="submit">
			</form>
			<form action="staff_reserved2.php" method="post">
			<div class="right-agileinfo same">
				<div class="gaps">	
				<p>ID or Name</p>
					<select class="form-control" name="choose">
						<option value ="studentname">studentname</option>
  						<option value ="studentID">studentID</option>
  						<option value ="tutorname">tutorname</option>	
  						<option value ="tutorID">tutorID</option>				
					</select>
				</div>
				<div class="gaps">
				<p>ID or Name</p>
						<input type="text" name="typing" placeholder="" required="" />
				</div>
			
			</div>
			<div class="clear"></div>
						  <input type="submit" value="submit">
			</form>

<?php


}

else{


	if(!is_null($_POST['staffid'])){
$staffid = $_POST['staffid'];
$password = hash("sha256", $_POST['password']);

$query="SELECT * FROM staff WHERE staffid='$staffid'";
$dup = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($dup);

       if($row >0)

		{
			
            $dbstaffid=$row['staffid'];	
            $dbpassword=$row['password'];
			
			if ($password == $dbpassword) {

			setcookie("staffid",$dbstaffid, time()+600);
			

			echo "<p>Welcome ".$staffid. ":     <a href=\"staffLogout.php\">Logout</a></p><br>  ";
			echo "<p>View Students Information: "." <a href=\"staff_view_student.php\" target=\"view_window\">Student Information</a></p>";
?>

			
			
			<form action="staff_reserved1.php" method="post">
			<div class="left-agileits-w3layouts same">
				<div class="gaps">	
				<p>Orders State</p>
					<select class="form-control" name="Orders_State">
						<option value ="pending">Pending</option>
  						<option value ="confirmed">Confirmed</option>
  						<option value ="decline">Decline</option>
  						<option value ="All">All</option>						
					</select>
				</div>
				
			</div>
			<div class="clear"></div>
						  <input type="submit" value="submit">
			</form>
			<form action="staff_reserved2.php" method="post">
			<div class="right-agileinfo same">
				<div class="gaps">	
				<p>ID or Name</p>
					<select class="form-control" name="choose">
  						<option value ="studentname">studentname</option>
  						<option value ="studentID">studentID</option>
  						<option value ="tutorname">tutorname</option>	
  						<option value ="tutorID">tutorID</option>						
					</select>
				</div>
				<div class="gaps">
				<p>ID or Name</p>
						<input type="text" name="typing" placeholder="" required="" />
				</div>
			
			</div>
			<div class="clear"></div>
						  <input type="submit" value="submit">
			</form>
			

<?php

			}

			else{
				echo "<p>Password Wrong! <a href=\"staffLoginIn.php\">Login</a></p> ";
			

			}

        }

        else{

		echo "<script>url=\"staffLoginIn.php\";window.location.href=url;</script>";
		
			}
}
else {echo "<script>url=\"staffLoginIn.php\";window.location.href=url;</script>";}			

}

}
?>

			
<?php

include 'acasupport_foot.php';




?>

