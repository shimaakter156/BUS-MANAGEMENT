<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>IUBAT Bus Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	nav
	{
	    float:right;
	    word-spacing: 35px;
	    padding: 20px;
	}
	nav li
	{
	    display:inline-block;
	    line-height: 80px;
	}
</style>

</head>
<body>
	<div class="wrapper">
		<header>
			<div class="logo">
			 	<img src="pic/b.png">

			</div>

			<?php
				if(isset($_SESSION['login_user']))
				{
					?>
						<nav>
							<ul>
								<li><a href="index.php" style="font-family: sans-serif;">HOME</a></li>
								<li><a href="bus.php" style="font-family: sans-serif;">BUS_SCHEDULE</a></li>
								<li><a href="logout.php" style="font-family: sans-serif;">LOGOUT</a></li>
								
								<li><a href="feedback.php" style="font-family: sans-serif;">FEEDBACK</a></li>
							</ul>
						</nav>
					<?php
				}
				else
				{
					?>
						<nav>
							<ul>
								<li><a href="index.php" style="font-family: sans-serif;">HOME</a></li>
							              
								<li><a href="login.php" style="font-family: sans-serif;">LOGIN</a></li>
								<li><a href="registration.php" style="font-family: sans-serif;"> SIGN-UP</a></li>
								<li><a href="feedback.php" style="font-family: sans-serif;">FEEDBACK</a></li>
							</ul>
						</nav>


					<?php
				}
			?>

			
		</header>
		<section>
			<div class="sec_img">
				<br><br><br>
				<div class="box">
					<br><br><br><h1 style="text-align: center;font-size: 35px;">Welcome To IUBAT Bus Service</h1><br><br>
					<h1 style="text-align: center;font-size: 30px">Opens at 6am</h1><br><br>
					<h1 style="text-align: center;font-size: 30px">Closes at 7pm</h1><br><br>
				</div>
			</div>
		</section>
		<!--
		<footer>
			<p style="font-family: sans-serif; text-align: center;">
				<br>Email : iubat.bus@gmail.com <br><br>
				Contact No : 01785246312 
			</p>
		</footer>
	-->
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>