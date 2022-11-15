<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<div class="hm">
<body>
	<nav class="navbar navbar-inverse " style="background-color: #483019;height:80px;">
	<div class="container-fluid">
		<?php
			if(isset($_SESSION['login_user']))
			{?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile.php" style="font-family: sans-serif;">PROFILE</a></li>
					<li><a href="logout.php" style="font-family: sans-serif;">LOGOUT</a></li>
				<!--</ul>
				<ul class="nav navbar-nav navbar-right">-->
					<li>
						<a href="">
							<div style="color: white;font-family: sans-serif;">
								<?php
									echo "<img class='img-circle profile_img' height=35 width=35 src='pic/" .$_SESSION['pic'] ." '>";
									echo "".$_SESSION['login_user'];
								?>
							</div>	
						</a>
					</li>
					
				</ul>
			<?php
			}
			else
			{?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php" style="font-family: sans-serif;"> LOGIN</a></li>
					
					<li><a href="registration.php" style="font-family: sans-serif;">SIGN-UP</a></li>
				</ul>	
				<?php
			}
		?>
	 	<div class="navbar-header">
			<a class="navbar-brand active" style="font-family: sans-serif;">IUBAT Bus Management System</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php" style="font-family: sans-serif;">HOME</a></li>
			<!--             <li><a href="bus.php" style="font-family: sans-serif;">BUS_SCHEDULE</a></li>	           -->	
			<li><a href="feedback.php" style="font-family: sans-serif;">FEEDBACK</a></li>
		</ul>

		
		
	</div>
	</div>
</nav>
</body>
</html>