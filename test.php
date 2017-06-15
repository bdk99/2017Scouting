<?php include '/var/www/_database/database.php' ?>     


<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
<center><h1 class="rainbowize">ALL DATA</h1><center>

<?php
	$result = mysqli_query($database,"select * FROM mytable");
	
	echo "<table border='1'>";
	
	$i = 0;
	while($row = $result->fetch_assoc())
	{
		if ($i == 0) {
			$i++;
			echo "<tr>";
			foreach ($row as $key => $value) {
				echo "<th>" . $key . "</th>";
			}
			echo "</tr>";
		}
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>" . $value . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_close($database);
?>