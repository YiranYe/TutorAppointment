<?php
include 'acasupport_head.php';
 
if(!empty($_COOKIE['tutorid']) ){  


setcookie("tutorid",null);
setcookie("tutor_name",null);
}

echo "<script>url=\"tutorLoginIn.php\";window.location.href=url;</script>";
include 'acasupport_foot.php';
?>