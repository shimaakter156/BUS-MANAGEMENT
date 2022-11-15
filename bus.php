<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bus_Schedule</title>
	<style type="text/css">
		.srch
		{
			padding-left: 1000px; 
		}
	</style>
</head>
<body>

	<!--_____________________________search bar_______________________________________________________________________________-->

<div class="srch">
	<form class="navbar-form" method="post" name="form1">
		
			<input class="form-control" type="text" name="search" placeholder="search bus-schedule" required="">
			<button style="background-color:#35dac7; " type="submit" name="submit" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		
		
	</form>
</div>
	<h2 style="text-align: center; color: #0d5071 ;">
		<b>List of Buses</b>
	</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * from bus where bus_id like '%$_POST[search]%' ");
			$r=mysqli_query($db,"SELECT * from bus where destination like '%$_POST[search]%' ");
			
			if(mysqli_num_rows($q)==0 && (mysqli_num_rows($r)==0))
			{
				echo "Sorry! Bus id and destination are invalid. Try again.";
			}
						
			else if(mysqli_num_rows($q)==1)
			{
				echo "<table class='table table-bordered table-hover'>";
					echo "<tr style='background-color: #35dac7;'>";

						//table header
						echo "<th>";  echo "Bus_ID";   echo "</th>";
						echo "<th>";  echo "Seats";   echo "</th>";
						echo "<th>";  echo "Starting_from";   echo "</th>";
						echo "<th>";  echo "Destination";   echo "</th>";
						echo "<th>";  echo "Departure_time";   echo "</th>";
						echo "<th>";  echo "Driver_name";   echo "</th>";
						echo "<th>";  echo "Driver_ID";   echo "</th>";
					echo "</tr>";

				while($row=mysqli_fetch_assoc($q))
				{
					echo "<tr>";
						echo "<td>";echo $row['bus_id'];echo "</td>";
						echo "<td>";echo $row['seats'];echo "</td>";
						echo "<td>";echo $row['starting from'];echo "</td>";
						echo "<td>";echo $row['destination'];echo "</td>";
						echo "<td>";echo $row['departure_time'];echo "</td>";
						echo "<td>";echo $row['driver name'];echo "</td>";
						echo "<td>";echo $row['driver id'];echo "</td>";
					echo "</tr>";
				}
				echo "<table>";
			
		}
		
			/*if(mysqli_num_rows($r)==0)
			{
				echo "Sorry! Destination is invalid. Try again.";
			}*/
			
			else  if(mysqli_num_rows($r)==1)
			{
				echo "<table class='table table-bordered table-hover'>";
					echo "<tr style='background-color: #35dac7;'>";

						//table header
						echo "<th>";  echo "Bus_ID";   echo "</th>";
						echo "<th>";  echo "Seats";   echo "</th>";
						echo "<th>";  echo "Starting_from";   echo "</th>";
						echo "<th>";  echo "Destination";   echo "</th>";
						echo "<th>";  echo "Departure_time";   echo "</th>";
						echo "<th>";  echo "Driver_name";   echo "</th>";
						echo "<th>";  echo "Driver_ID";   echo "</th>";
					echo "</tr>";

				while($row=mysqli_fetch_assoc($r))
				{
					echo "<tr>";
						echo "<td>";echo $row['bus_id'];echo "</td>";
						echo "<td>";echo $row['seats'];echo "</td>";
						echo "<td>";echo $row['starting from'];echo "</td>";
						echo "<td>";echo $row['destination'];echo "</td>";
						echo "<td>";echo $row['departure_time'];echo "</td>";
						echo "<td>";echo $row['driver name'];echo "</td>";
						echo "<td>";echo $row['driver id'];echo "</td>";
					echo "</tr>";
				}
				echo "<table>";
			}
		

		}
			/*if button is not pressed.......................*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `bus` ORDER BY `bus`.`bus_id` ASC;");

			echo "<table class='table table-bordered table-hover'>";
			echo "<tr style='background-color: #35dac7;'>";

				//table header
				echo "<th>";  echo "Bus_ID";   echo "</th>";
				echo "<th>";  echo "Seats";   echo "</th>";
				echo "<th>";  echo "Starting_from";   echo "</th>";
				echo "<th>";  echo "Destination";   echo "</th>";
				echo "<th>";  echo "Departure_time";   echo "</th>";
				echo "<th>";  echo "Driver_name";   echo "</th>";
				echo "<th>";  echo "Driver_ID";   echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
					echo "<td>";echo $row['bus_id'];echo "</td>";
					echo "<td>";echo $row['seats'];echo "</td>";
					echo "<td>";echo $row['starting from'];echo "</td>";
					echo "<td>";echo $row['destination'];echo "</td>";
					echo "<td>";echo $row['departure_time'];echo "</td>";
					echo "<td>";echo $row['driver name'];echo "</td>";
					echo "<td>";echo $row['driver id'];echo "</td>";
				echo "</tr>";
			}
			echo "<table>";
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