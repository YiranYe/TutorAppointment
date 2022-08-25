<?php
include 'acasupport_head.php';
 
if(!empty($_COOKIE['userid']) || !empty($_COOKIE['password']) ){  


setcookie("userid",null);
setcookie("password", null);  
setcookie("name", null);
setcookie("dbemail", null);
setcookie("dbphone", null);
setcookie("year",null);
}


echo "<script>url=\"studentLoginIn.php\";window.location.href=url;</script>";
include 'acasupport_foot.php';
?>

