<?php
include 'acasupport_head.php';
include 'con_config.php';


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

echo "<script>url=\"tutorLoginIn.php\";window.location.href=url;</script>";	



}




include 'acasupport_foot.php';
?>