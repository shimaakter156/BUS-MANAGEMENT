<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body
		{
			background-image: url("pic/23.jpg");
		}
		.wrapper
		{
			width:900px;
			height:600px;
			background-color: white;
			
			opacity: .8;
			padding: 20px;
			margin: 30px auto;

		}
		.form-control
		{
			height:100px;
			width:70%;

		}
		.scroll
		{
			width: 100%;
			height: 300px;
			overflow: auto;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<h3>
			If you have any suggestions or questions please comment below. 
		</h3>
		<form style="" action="" method="post">
			<br><input class="form-control" type="text" name="comment" placeholder="write your comment..."><br>
			<input class="btn btn-default"type="submit" name="submit" value="Comment" style="width:100px;height:40px; color: #800000;">
		</form>
	
<br><br>
<div class="scroll">
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				}

			}

			else
			{
				$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
					$res=mysqli_query($db,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
			}
		?>
</div>
</div>

</body>
</html>