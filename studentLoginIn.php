<!DOCTYPE HTML>
<html>

<head>
	<title>Tutor Appointment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tutor Appointment Form">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
	<h1> Student Login </h1>
	<div class="bg-agile">
		<div class="book-appointment">
			<h2>Student Login</h2>
			<form action="StudentLogin.php" method="post">

				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>Student ID</p>
						<input type="text" name="userid" placeholder="" required="" />
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
				<h3>
					<p></p>Do not have account?<p></p>
				</h3>
				<a href="student_regist.php"><input type="button" value="Sign in"></a>

			</form>
		</div>
	</div>
	<!--copyright-->
	<div class="copy w3ls">
		<p>Encountered any problem? Please Contact Student Academic Support Service Center<br></p>
		<p>Office: D206, GEH Tel: +86 577 5587 0135 Email: sassc@wku.edu.cn Off Office Hours: Mon. - Fri. 8:30 a.m. - 4.30
			p.m.<br></p>
		<p>&copy; 2018. Appointment Form. All Rights Reserved | Design by Anson </a> </p>
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

</body>

</html>