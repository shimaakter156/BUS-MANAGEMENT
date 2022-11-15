<?php
	include "connection.php";
	include "navbar.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<style type="text/css">
	nav
	{
	    float:right;
	    
	    padding: 20px;
	    width: 100%;
	}
	nav li
	{
	    display:inline-block;
	    line-height: 80px;
	}
	
</style>


<style type="text/css">
		section
		{
			margin-top: -20px;
			height:760px;
    		width:1349px;
    		background-image: url(pic/52.jpg);
		}
		.box2
		{
		    height: 450px;
		    width: 480px;
		    background-color:#220006;
		    margin: 0px auto;
		    opacity: .8;
		    color: black;
		    padding: 20px;
		    padding-top: 150px;

		}
		label
		{
			font-family: sans-serif;
			font-size: 15px;
			font-weight: 600;
			color: white;

		}
		.reg_img
		{
		    height: 900px;
		    margin-top: 0px;
		    background-image: url("pic/15.jpg");
		}

	</style>

</head>
<body>

<section><br><br><br><br><br><br><br><br><br>
	<div class="box2">
		<form name="signup" action="" method="post">


	 				<b><p style="padding-left: 50px;font-size: 18px;font-weight: 700;font-family: sans-serif;color: white;">Sign Up As: </p></b><br>
	 				<input style="margin-left: 50px;width: 18px;" type="radio" name="user" id="admin" value="admin">
	 				<label for="admin">Admin</label>
	 				<input style="margin-left: 50px;width: 18px;" type="radio" name="user" id="student" value="student" checked="">
	 				<label for="student">Student</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

	 				<button class="btn btn-default" type="submit" name="submit1" style="color: #220006;font-family: sans-serif;font-weight: 700;width: 70px;height: 30px;">Ok</button>
	 	</form>
	</div>
	<?php

 		if(isset($_POST['submit1']))
 		{
 			if( $_POST['user']=='admin')
 			{
 				?>
	 					<script type="text/javascript">
	 						window.location="Admin/registration.php"
	 					</script>
	 					
	 				<?php
 			}
 			else
 			{
 				?>
	 					<script type="text/javascript">
	 						window.location="Student/registration.php"
	 					</script>
	 					
	 				<?php
 			}

 		}
 	?>
</section>
</body>
</html>