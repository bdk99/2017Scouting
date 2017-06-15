<?php include '/var/www/_database/database.php' ?>   

<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
<center><h1 class="rainbowize">Data By TeamNum</h1></center>

<?php

	$TeamNum = mysqli_real_escape_string($database, $_POST['TeamNum']);
	$result = mysqli_query($database,"SELECT * FROM 2017_game.mytable WHERE teamnum='$TeamNum'");
	
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