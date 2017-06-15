<?php include '/var/www/_database/database.php' ?>     


<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
<center><h1 class="rainbowize">Averages</h1><center>
	
	<?php
		$result = mysqli_query($database,"select *, 
		AVG(AutonMoveBaseline), 
		AVG(AutonGearsScored), 
		AVG(AutonFuelScoredLow), 
		AVG(AutonCycle), 
		AVG(AutonFuelScoredHigh), 
		AVG(TeleopGearsMissed),  
		AVG(TeleopGearsScored),
		AVG(TeleopFuelScoredHigh1+TeleopFuelScoredHigh2+TeleopFuelScoredHigh3+TeleopFuelScoredHigh4+TeleopFuelScoredHigh5+TeleopFuelScoredHigh6+TeleopFuelScoredHigh7+TeleopFuelScoredHigh8+TeleopFuelScoredHigh9) AS TELEOPHIGHAVG,
		AVG(TeleopFuelScoredLow),
		AVG(DefensiveSkill),
		AVG(DefenseAvoidanceSkill),
		AVG(GroundBallPickup),
		AVG(Control),
		AVG(Climb),
		AVG(HopperPickUp),
		AVG(GearFloorPickup),
		AVG(GearHumanPickup),
		AVG(ShootingCycles),
		AVG(AutonFuelHighHopper)
		
		FROM mytable GROUP BY TeamNum");
		
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