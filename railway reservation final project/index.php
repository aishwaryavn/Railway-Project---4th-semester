<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Indian Railways </title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php"><h1>Indian Railways</h1></a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				&nbsp&nbsp<a class="brand" href="index.php" >HOME</a>
				&nbsp&nbsp<a class="brand" href="train.php" >FIND TRAIN</a>
				&nbsp&nbsp<a class="brand" href="reservation.php">RESERVATION</a>
				&nbsp&nbsp<a class="brand" href="profile.php">PROFILE</a>
				&nbsp&nbsp<a class="brand" href="contact.php">CONTACT</a>
				&nbsp&nbsp<a class="brand" href="about.php">ABOUT US</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
						<p><b>Welcome To Indian Railways.This website is Exclusively used for Train Reservations.</b></p>
				</br>
				<p><b>Please Login For Bookings.</b></p></br>
				<p><b>If you are a new user, sign-up for registration.</b></p></br>
				<p><b>HAVE A HAPPY AND SAFE JOURNEY</b></p></br>
				<p><b>FOR ANY QUERIES CONTACT US</b><p></br>
			
				
				</div>
			</marquee>
			</div>
		</div>
		
		
		</footer>	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>