<?php

include 'acasupport_head.php';

include 'con_config.php';



if(isset($_COOKIE['tutorid'])){



if ($conn->connect_error) {



    die("Connection failed: " . $conn->connect_error);



}



else{



$tutorid = $_COOKIE['tutorid'];

$Orders_State = $_POST['Orders_State'];



echo "<p>Welcome ".$_COOKIE['tutor_name']. ":     <a href=\"tutorLogout.php\">Logout</a></p>  ";



if($Orders_State=="All"){

$query = "select O.orderid,O.userid,U.name, O.Date, time.timeslot ,O.state,O.course,O.question, O.location from orders O, users U, time where tutorid='$tutorid' and U.userid=O.userid and time.timeid=O.time and state != 'delete' order by O.Date desc, time.timeslot asc";

}

else{

 $query = "select O.orderid,O.userid,U.name, O.Date, time.timeslot ,O.state,O.course,O.question, O.location from orders O, users U, time where tutorid='$tutorid' and U.userid=O.userid and time.timeid=O.time and O.state='$Orders_State' and state != 'delete' order by O.Date desc, time.timeslot asc";

  }

$result = mysqli_query($conn,$query);





?>



<center>

<div>

<h2 id="x">Student Reserved</h2>

</div>

<form action='tutor_update_orders.php' method='post'>



<table style="border:2px solid #444;border-collapse:collapse;" id="mytable">

<tr><td>Student ID</td><td>Student Name</td><td>Date</td><td>Time</td><td>Location</td><td>Course</td><td>Question</td><td>State</td></tr>



<?php

$i=0;

if($result){

while($row = mysqli_fetch_array($result))

  {

  

  echo "<tr><td>".$row['userid'] ."</td><td>".$row['name']. "</td><td> " . $row['Date'] . "</td><td>" . $row['timeslot']."</td><td>".$row['location']."</td><td>".$row['course']."</td><td>".$row['question']."</td>";



   if($row['state']=="pending"){

   	echo "<td><select name='state[$i]'>

	<OPTION value='pending' selected>pending</OPTION>

	<OPTION value='confirmed' >confirmed</OPTION>

	</select></td></tr>";

   }

   else{

   	echo "<td>".$row['state']."</td></tr>";

   }

   echo "<input type='hidden' name='orderid[$i]' value='".$row['orderid']."'>";

    echo "<input type='hidden' name='state_Copy[$i]' value='".$row['state']."'>";
    echo "<input type='hidden' name='userid_Copy[$i]' value='".$row['userid']."'>";

    $i++;

  }

}





?>

<div class="left-agileits-w3layouts same">

<a href="tutorCheck.php"><input type="button" value="Back"></a>

</div>

<div class="right-agileinfo same">

<input type="submit" value="Update"> 

</div>

</table>

<br />

<hr />

</form>

<script type="text/javascript">



$.bstablecrosshair('mytable',{color:'#444',background:'#aaa','foreground':'#fff'});



</script>



</center>



<?php

}



}



else {

  echo "<p>You should login firstly.  <a href=\"tutorLoginIn.php\">Login</a></p>";

}





include 'acasupport_foot.php';

?>



