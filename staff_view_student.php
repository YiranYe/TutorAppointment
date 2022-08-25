<?php
include 'acasupport_head.php';
include 'con_config.php';


if(isset($_COOKIE['staffid'])){


echo "<p>Welcome ".$_COOKIE['staffid']. ":     <a href=\"staffLogout.php\">Logout</a></p><br>  ";
?>

<div class="book-appointment">
	
			<form action="staff_view_student_show.php" method="post">

			<div class="clear">
				<div class="gaps">	
				<p>ID or Name</p>
					<select class="form-control" name="choose">
						<option value ="studentname">studentname</option>
  						<option value ="studentID">studentID</option>  												
					</select>
				</div>
				<div class="gaps">
				<p>ID or Name</p>
						<input type="text" name="typing" placeholder="" required="" />
				</div>
			
			</div>
			<div class="clear"></div>
			<div class="left-agileits-w3layouts same">
			<a href="staffCheck.php"><input type="button" value="Back"></a>
		    </div>	
			<div class="right-agileits-w3layouts same">
			<input type="submit" value="submit">				  
			</div>			  

			</form>

</div>

<?php

}

else{

echo "<script>url=\"staffLoginIn.php\";window.location.href=url;</script>";	

}

include 'acasupport_foot.php';
?>