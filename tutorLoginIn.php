
<!DOCTYPE HTML>
<html>
<head>
<title>Tutor Appointment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tutor Appointment Form">
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
<h1> Tutor Login </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Tutor Login</h2>
			<form action="tutorLogin.php" method="post">

			<div class="left-agileits-w3layouts same">
				<div class="gaps">	
				<p>Tutor ID</p>
					<input type="text" name="tutorid" placeholder="" required=""/>
				</div>
			</div>
			<div class="right-agileinfo same">
				<div class="gaps">
				<p>Password</p>
						<input type="text" name="password" placeholder="" required="" />
				</div>
				
			</div>
			<div class="clear"></div>
						  <input type="submit" value="Log in">
						  <h2> </h2>				  
						  

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