<?php
	include "connection.php";
	include "navbar.php";
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style type="text/css">
		section
		{
			margin-top: -20px;
		}
		.box1
		{
		    height: 550px;
		    width: 480px;
		    background-color:#9e8b72;
		    margin: 30px auto;
		    opacity: .8;
		    color: black;
		    padding: 20px;
		}
		label
		{
			font-family: sans-serif;
			font-size: 15px;
			font-weight: 600;

		}
	</style>

</head>
<body>

 	<section>
 		<div class="log_img">
 			<br><br><br>
 			<div class="box1">
	 			<h1 style="text-align: center;font-size: 35px; font-family: sans-serif;">IUBAT Bus Management System</h1>
	 			<h1 style="text-align: center;font-size: 30px; font-family: sans-serif; color: #0d0d42; ">User Login Form</h1><br>
	 			<form name="Login" action="" method="post">


	 				<b><p style="padding-left: 50px;font-size: 18px;font-weight: 700;font-family: sans-serif;">Login As: </p></b>
	 				<input style="margin-left: 50px;width: 18px;" type="radio" name="user" id="admin" value="admin">
	 				<label for="admin">Admin</label>
	 				<input style="margin-left: 50px;width: 18px;" type="radio" name="user" id="student" value="student" checked="">
	 				<label for="student">Student</label><br><br>




					<div class="login">
						<input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
						<input class="form-control" type="password" name="Password" placeholder="Password" required=""><br>
						<input class="btn btn-default" type="submit" name="submit" value="Login" style="color: #800000; width: 80px; height: 40px"><br>
					</div>
			
					<p style="color: black; padding-left: 25px;">
						<br><br>
						<a style="color:white;" href="update_password.php"><b>Forgot Password?</b></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						Don't have an account? <a style="color: #800000;" href="registration.php"><b>Sing Up</b></a>
					</p>
				</form>
 			</div>
 		</div>
 	</section>

 	<?php

 		if(isset($_POST['submit']))
 		{
 			if( $_POST['user']=='admin')
 			{
	 			$count=0;
	 			$res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && Password='$_POST[Password]';");
	 			$row=mysqli_fetch_assoc($res);
	 			$count=mysqli_num_rows($res);

	 			if($count==0)
	 			{
	 				?>
	 				<!--
	 					<script type="text/javascript">
	 						alert("The username and password doesn't match.");
	 					</script>
	 				-->
	 				<div class="alert alert-danger" style="width:700px; margin-left: 320px; margin-top: -700px; color:#ff120d;text-align: center;font-size: 15px;">
	 					<strong>
	 						The username and password doesn't match.
	 					</strong>
	 				</div>
	 				<?php
	 			}
	 			else
	 			{
	 				/*--------------------------------------------if user name pass match--------------------------------*/
	 				$_SESSION['login_user']=$_POST['username'];
	 				$_SESSION['pic']=$row['pic'];
	 				?>
	 					<script type="text/javascript">
	 						window.location="Admin/profile.php"
	 					</script>
	 				<?php
	 			}

 			}
 			else
 			{
	 			$count=0;
	 			$res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && Password='$_POST[Password]';");
	 			$row=mysqli_fetch_assoc($res);
	 			$count=mysqli_num_rows($res);

	 			if($count==0)
	 			{
	 				?>
	 				<!--
	 					<script type="text/javascript">
	 						alert("The username and password doesn't match.");
	 					</script>
	 				-->
	 				<div class="alert alert-danger" style="width:700px; margin-left: 320px; margin-top: -700px; color:#ff120d;text-align: center;font-size: 15px;">
	 					<strong>
	 						The username and password doesn't match.
	 					</strong>
	 				</div>
	 				<?php
	 			}
	 			else
	 			{
	 				$_SESSION['login_user']=$_POST['username'];
	 				$_SESSION['pic']=$row['pic'];
	 				?>
	 					<script type="text/javascript">
	 						window.location="Student/profile.php"
	 					</script>
	 					
	 				<?php
	 			}
 			}

 		}

 	?>
 	<!--<footer style="background-color: white; margin-top: 90px;">
		
		<p style="font-family: sans-serif; text-align: center;">
			<b>Developed By: </b><br>
			Afsana Alam Trisha <br>
			Khadija Rahman Riya <br>
			Shima Akter <br>
		</p>
	</footer>-->

</body>
</html>