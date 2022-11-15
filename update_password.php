<?php
	include "connection.php";
	include "navbar.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
		body
		{
			
			height:650px;
			background-image: url("pic/45.jpg");
			background-repeat: no-repeat;
		}
		.wrapper
		{
			width:600px;
			height: 400px;
			background-color:#58242a; 
			margin:100px auto;
			opacity: .8;
			color: white;
			padding :27px 15px;
		}
		.form-control
		{
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div style="text-align: center;">
		<h1 style="text-align: center;font-size: 35px; font-family: sans-serif;">IUBAT Bus Management System</h1>
		<h1 style="text-align: center;font-size: 25px; font-family: sans-serif;">Change Your Password</h1><br>
		
		</div>
		<div style="padding-left:125px;">
		<form action="" method="post">
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<button class="btn btn-default" tyoe="submit" name="submit">Update</button>
		</form></div>
	</div>
	<?php
		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE student SET Password='$_POST[Password]'WHERE username='$_POST[username]' AND email='$_POST[email]'; "))
			{
				?>
				<script type="text/javascript">
					alert("The Password Updated Successfully.");
				</script>

				<?php
			}
		}

	?>
	<footer style="background-color: white; margin-top: 90px;">
		
		<p style="font-family: sans-serif; text-align: center;">
			<b>Developed By: </b><br>
			Afsana Alam Trisha <br>
			Khadija Rahman Riya <br>
			Shima Akter <br>
		</p>
	</footer>
</body>
</html>