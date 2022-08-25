<?php
include 'acasupport_head.php';

// if(isset($_COOKIE['userid'])){
// echo "<p>Welcome ".$_COOKIE['name']. ":     <a href=\"studentLogout.php\">Logout</a></p>  ";
?>

<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("tutorId").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tutorId").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetTutorList.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

<h2>Student Login</h2>
<form action="processappointment.php" method="post">

	<div class="left-agileits-w3layouts same">

		<div class="gaps">
			<p>Course</p>
			<!-- change -->
			<!-- <input type="text" name="course" placeholder="" required="" /> -->
			<input type="text" name="course_name" id="txt1"
			onkeyup="showHint(this.value)" list="courseId">
			<datalist id="courseId">
				<!-- <option value="123"> -->
				<?php include 'GetCourseList.php';?>
			</datalist>
			
		</div>

		<div class="gaps">
			<p>Prepared Question</p>
			<textarea name="question" placeholder="" required=""></textarea>
		</div>
		<div class="gaps">

		</div>

		 <!-- typo -->
		<p>Remember to go to "Reversed" to check your revservations' state (pending or confirmed) after submitting
			reservation</p><br>
		<p>Links</p>
		<a href="/file/Course_List _2019_Spring.xlsx" download="Course_List _2019_Spring.xlsx">Course List 2019 Spring.xlsx</a>
		<br>
	</div>

	<div class="right-agileinfo same">
		<div class="gaps">
			<p>Select Date (You can not select tomorrow)</p>
			<input id="datepicker1" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/mm/dd/';}"
			 required="">
		</div>

		<div class="gaps">
			<p>Time</p>
			<select class="form-control" name="time">
				<option></option>
				<option value="1">8:30-9:30</option>
				<option value="2">9:30-10:30</option>
				<option value="3">10:30-11:30</option>
				<option value="4">11:30-12:30</option>
				<option value="5">12:30-13:30</option>
				<option value="6">13:30-14:30</option>
				<option value="7">14:30-15:30</option>
				<option value="8">15:30-16:30</option>
				<option value="9">16:30-17:30</option>
				<option value="10">17:30-18:30</option>
				<option value="11">18:30-19:30</option>
				<option value="12">19:30-20:30</option>
				<option value="13">20:30-21:30</option>
				<option value="14">21:30-22:30</option>
			</select>
		</div>

		<div class="gaps">
			<p>Prefer Tutor</p>
			<input type="text" name="prefertutor" list="tutorId" />
			<datalist id="tutorId">
				<!-- ToDo -->
			<datalist>
		</div>
		<input type="submit" value="Make an appointment">
	</div>
	<div class="clear"></div>

</form>


<?php

//数据显示
// }


// else
// {

// echo "<p>You should login firstly.  <a href=\"studentLoginIn.php\">Login</a></p>";


// }











include 'acasupport_foot.php';
?>