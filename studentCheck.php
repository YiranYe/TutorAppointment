<?php
include 'acasupport_head.php';
include 'con_config.php';


if(isset($_COOKIE['userid'])){


echo "<p>Welcome ".$_COOKIE['name']. ":     <a href=\"studentLogout.php\">Logout</a></p>  ";

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

echo "<script>url=\"studentLoginIn.php\";window.location.href=url;</script>";

}



include 'acasupport_foot.php';

?>