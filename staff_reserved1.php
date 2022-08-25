<?php
include 'acasupport_head.php';
include 'con_config.php';

if(isset($_COOKIE['staffid'])){

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

else{

  $staffid = $_COOKIE['staffid'];
  $Orders_State = $_POST['Orders_State'];

  if($Orders_State=="All"){
  $query = "select O.orderid, O.userid,U.phone as uphone, O.tutorid as tutorid,U.name as username ,O.location ,O.Date,time.timeslot,O.state,O.course,O.question, T.name from orders O, tutor T , users U, time where T.tutorid=O.tutorid and O.userid=U.userid and time.timeid = O.time order by O.Date desc, time.timeslot asc";}
  else {
  $query = "select O.orderid, O.userid,U.phone as uphone, O.tutorid as tutorid,U.name as username ,O.location ,O.Date,time.timeslot,O.state,O.course,O.question, T.name from orders O, tutor T , users U, time where T.tutorid=O.tutorid and O.userid=U.userid and time.timeid = O.time and O.state='$Orders_State' order by O.Date desc, time.timeslot asc";
  }



$result = mysqli_query($conn,$query);


?>

<center>
<div>
<h2 id="x">Student Reserved</h2>
</div>
<form action='staff_update_orders.php' method='post'>
<table style="border:2px solid #444;border-collapse:collapse;" id="mytable">

<!--  <tr><td>ID</td><td>Date</td><td>Time</td><td>Tutor Name</td><td>Course</td><td>Question</td><td>State</td></tr>  -->

 <tr><td>Student Name</td><td>Course</td><td>Question</td><td>location</td><td>Date</td><td>Time</td><td>Tutor Name</td><td>TutorID</td><td>State</td></tr>




<?php

$i=0;
if($result){


 
 while($row = mysqli_fetch_array($result)){ 
 echo "<tr><td><a title=\"ID: ".$row['userid']." Phone: ".$row['uphone']."\">".$row['username']."</a></td><td>".$row['course']."</td><td>".$row['question']."</td>";

 echo "<td><input type='text' name='location[$i]' value='".$row['location']."' /></td>";
 echo "<td><input type='text' name='Date[$i]' value='".$row['Date']."' /></td>";
 echo "<td><input type='text' name='timeslot[$i]' value='".$row['timeslot']."'></td>";
 echo "<td>".$row['name']."</td>";
 echo "<td><input type='text' name='tutorid[$i]' value='".$row['tutorid']."'></td>";


 if($row['state']== "pending"){
  echo "<td><select name='state[$i]'>
<OPTION value='pending' selected>pending</OPTION>
<OPTION value='confirmed' >confirmed</OPTION>
<OPTION value='decline' >decline</OPTION>
</select></td>";
 }
 else if ($row['state']== "confirmed"){
  echo "<td><select name='state[$i]'>
<OPTION value='pending' >pending</OPTION>
<OPTION value='confirmed' selected>confirmed</OPTION>
<OPTION value='decline' >decline</OPTION>
</select></td>";
 }
 else if ($row['state']== "decline"){
  echo "<td><select name='state[$i]'>
<OPTION value='pending' >pending</OPTION>
<OPTION value='confirmed'>confirmed</OPTION>
<OPTION value='decline' selected>decline</OPTION>
</select></td>";
 }



  echo "<input type='hidden' name='location_Copy[$i]' value='".$row['location']."'>";
  echo "<input type='hidden' name='orderid[$i]' value='".$row['orderid']."'>";
  echo "<input type='hidden' name='Date_Copy[$i]' value='".$row['Date']."'>";
  echo "<input type='hidden' name='timeslot_Copy[$i]' value='".$row['timeslot']."'>";
  echo "<input type='hidden' name='name_Copy[$i]' value='".$row['name']."'>";
  echo "<input type='hidden' name='tutorid_Copy[$i]' value='".$row['tutorid']."'>";
  echo "<input type='hidden' name='state_Copy[$i]' value='".$row['state']."'>";
  echo "<input type='hidden' name='userid_Copy[$i]' value='".$row['userid']."'>";
  
$i++;
}

  
}


?>
<div class="left-agileits-w3layouts same">
<a href="staffCheck.php"><input type="button" value="Back"></a>
</div>
<div class="right-agileinfo same">
<input type="submit" value="Update"> 
</div>
</table>
<br />
<hr />

</div>


</form>


<script type="text/javascript">

$.bstablecrosshair('mytable',{color:'#444',background:'#aaa','foreground':'#fff'});

</script>

<script>
  $( document ).tooltip();
</script>
 
</center>

<?php
}

}

else {
	echo "<p>You should login firstly.  <a href=\"staffLoginIn.php\">Login</a></p>";
}


include 'acasupport_foot.php';
?>




