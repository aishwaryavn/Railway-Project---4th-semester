<?php
	session_start();
	if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Contact </title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
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
			 ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php"><h1>Indian Railways</h1></a>
			</div>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
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
		
		<div>
			<h2>  </h2>
			<div>
				
			</div>
		</div>
		
		<div class="span12 well">
			<h1 align="center">CONTACT US</h1>
	
			<div style="border-top: solid 1px;">
			<div style="width: 60%; float:left;">
			<br />
			<pre><h3>PLEASE CONTACT WWW.INDIANRAILWAYS.COM</h3>
	
			
			</pre>
			</div>
			
			<div style="width:40%; float:left; margin-top:17px;" >
			
			</div>
			</div>
			<br><br>
			
			<div style="width: 60%; float:left;">
			
			</pre>
			</div>
		
			<div style="width:40%; float:left; " >
			
			</div>
			
			
			<div style="width: 60%; float:left;">
			
	
			
			
			</pre>
			</div>
		
			<div style="width:40%; float:left; " >
			
			</div>
			
			
			<div style="width: 60%; float:left;">
			
	
			
					</pre>
			</div>
		
			<div style="width:40%; float:left; " >
			
			</div>

		</div>
		
		
		<!-- Footer -->
		<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  </p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	</p>
			</div>
		</div>
		</footer>
	</div>
</body>
</html>