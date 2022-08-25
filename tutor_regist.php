
<!DOCTYPE HTML>
<html>
<head>
<title>Tutor Appointment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Turtor Appointment Form">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> Tutor Appointment Table </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Register</h2>
			<form action="tutorSignIn.php" method="post">
			<div class="left-agileits-w3layouts same">
				<div class="gaps">	
				<p>Real Name</p>
					<input type="text" name="Real_Name" placeholder="" required=""/>
				</div>
				<div class="gaps">	
				<p>Phone number</p>
					<input type="text" name="Phone_Number" placeholder="" required=""/>
				</div>
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>
				<div class="gaps">
				<p>Enrollment Year</p>
						<input type="text" name="Enrollment" placeholder="" required="" />
				</div>
				
		<!--	<div class="gaps">
				 <p>Enrollment Year</p>	
					<select class="form-control" name="Enrollment">
						<option value=""></option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
					</select> 
			</div>	
		-->	
			</div>
			<div class="right-agileinfo same">
				<div class="gaps">
				<p>Student ID</p>
						<input type="text" name="ID" placeholder="" required="" />
				</div>
				<div class="gaps">
				<p>Password</p>
						<input type="text" name="Password1" placeholder="" required="" />
				</div>
				<div class="gaps">
				<p>Retype Password</p>
						<input type="text" name="Password2" placeholder="" required="" />
				</div>
			
			</div>
			<div class="clear"></div>
						  <input type="submit" value="Sign In">
			</form>
		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2018. Appointment Form. All Rights Reserved | Design by Anson </a> </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>