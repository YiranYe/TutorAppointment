<?php
include 'acasupport_head.php';
include 'con_config.php';

if(isset($_COOKIE['staffid'])){

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

else{

  $staffid = $_COOKIE['staffid'];
  $choose = $_POST['choose'];
  $typing = $_POST['typing'];
  if($choose=="studentID"){
  $query = "select * from users where userid='$typing'";}
  else if ($choose=="studentname"){
  $query = "select * from users where name like '%$typing%'";}



$result = mysqli_query($conn,$query);


?>

<center>
<div>
<h2 id="x">Student Information</h2>
</div>
<table style="border:2px solid #444;border-collapse:collapse;" id="mytable">

 <tr><td>Student ID</td><td>Student Name</td><td>Email</td><td>Phone</td><td>Enrollment Year</td></tr>

<?php

if($result){
 while($row = mysqli_fetch_array($result)){

 echo "<tr><td>".$row['userid']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['year']."</td></tr>";
}
}

  
}


?>




</table>
<a href="staff_view_student.php"><input type="button" value="Back"></a>
<br />
<hr />

</div>


</form>


<script type="text/javascript">

$.bstablecrosshair('mytable',{color:'#444',background:'#aaa','foreground':'#fff'});

</script>

</center>

<?php
}


else {
  echo "<p>You should login firstly.  <a href=\"staffLoginIn.php\">Login</a></p>";
}


include 'acasupport_foot.php';
?>

