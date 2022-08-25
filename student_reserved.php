<?php
include 'acasupport_head.php';
include 'con_config.php';

if(isset($_COOKIE['userid'])){

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

else{

$userid = $_COOKIE['userid'];
echo "<p>Welcome ".$_COOKIE['name']. ":     <a href=\"studentLogout.php\">Logout</a></p>  ";
$query = "select O.orderid, O.userid, O.Date, time.timeslot ,O.state,O.course,O.question, O.location,T.name from orders O, tutor T, time where userid='$userid' and T.tutorid=O.tutorid and time.timeid=O.time and state != 'delete' order by O.Date desc, time.timeslot asc";
$result = mysqli_query($conn,$query);


?>

<center>
<div>
<h2 id="x">Student Reserved</h2>
</div>
<table style="border:2px solid #444;border-collapse:collapse;" id="mytable">
<tr><td>ID</td><td>Date</td><td>Time</td><td>Location</td><td>Tutor Name</td><td>Course</td><td>Question</td><td>State</td><td>Delete</td></tr>

<?php

if($result){
while($row = mysqli_fetch_array($result))
  {
  echo "<form action=\"Studentdelete.php\" method=\"post\">";
  echo "<input type=\"hidden\" name=\"orderid\" value=\"".$row['orderid']."\" />";
  echo "<tr><td>".$row['userid'] . "</td><td> " . $row['Date'] . "</td><td>" . $row['timeslot']."</td><td>".$row['location']."</td><td>".$row['name']."</td><td>".$row['course']."</td><td>".$row['question']."</td><td>".$row['state']."</td><td>";
  if($row['state']=='pending'){
  	echo "<button> delete </button>";
  }
  else{
    echo "<p>/</p>";
  }

  echo "</td></tr>";
  echo "</form>";

  }
}


?>
<div class="clear">
<a href="StudentLogin.php"><input type="button" value="Back"></a>
</div>
<div class="clear">

</div>
</table>
<br />
<hr />

<script type="text/javascript">

$.bstablecrosshair('mytable',{color:'#444',background:'#aaa','foreground':'#fff'});

</script>

</center>



<?php
}

}

else {
	echo "<p>You should login firstly.  <a href=\"studentLoginIn.php\">Login</a></p>";
}


include 'acasupport_foot.php';
?>

