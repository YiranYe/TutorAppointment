<?php
include 'acasupport_head.php';
 
if(!empty($_COOKIE['staffid']) ){  


setcookie("staffid",null);

}

echo "<script>url=\"staffLoginIn.php\";window.location.href=url;</script>";
include 'acasupport_foot.php';
?>