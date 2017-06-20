<?php
	
	// Database Connection
	
	$host="localhost";
	$uname="team3641";
	$pass="password";
	$database = "2017_game"; 
	
	$connection=mysql_connect($host,$uname,$pass); 
	
	echo mysql_error();
	
	//or die("Database Connection Failed");
	$selectdb=mysql_select_db($database) or 
	die("Database could not be selected"); 
	$result=mysql_select_db($database)
	or die("database cannot be selected <br>");
	
	// Fetch Record from Database
	
	$output = "";
	$table = "mytable"; // Enter Your Table Name 
	$sql = mysql_query("select ID, Teamnum, MatchNum, ScouterName, AutonMoveBaseline, AutonGearsScored, AutonFuelScoredLow, AutonCycle, AutonFuelScoredHigh, TeleopGearsMissed, TeleopGearsScored, TeleopFuelScoredHigh1, TeleopFuelScoredHigh2, TeleopFuelScoredHigh3, TeleopFuelScoredHigh4, TeleopFuelScoredHigh5, TeleopFuelScoredHigh6, TeleopFuelScoredHigh7, TeleopFuelScoredHigh8, TeleopFuelScoredHigh9,TeleopFuelScoredLow, DefensiveSkill, DefenseAvoidanceSkill, GroundBallPickup, Control, TIMESTAMP,	Notes, Climb, HopperPickUp, GearFloorPickup, GearHumanPickup, ShootingCycles, AutonFuelHighHopper,
	AVG(AutonMoveBaseline),
	avg(nullif(AutonGearsScored, 0)) AS AVGAutonGearsScored,
	avg(nullif(AutonFuelScoredLow, 0)) AS AVGFuelScoredLow,
	avg(nullif(AutonCycle, 0)) AS AVGAutonCycle,
	avg(nullif(AutonFuelScoredHigh, 0)) AS AVGAutonFuelScoredHigh,
	AVG(TeleopGearsMissed),  
	AVG(TeleopGearsScored),
	SUM(TeleopFuelScoredHigh1+TeleopFuelScoredHigh2+TeleopFuelScoredHigh3+TeleopFuelScoredHigh4+TeleopFuelScoredHigh5+TeleopFuelScoredHigh6+TeleopFuelScoredHigh7+TeleopFuelScoredHigh8+TeleopFuelScoredHigh9)/SUM(ShootingCycles) AS TELEOPHIGHAVG,
	AVG(TeleopFuelScoredLow),
	avg(nullif(DefensiveSkill, 0)) AS AVGDefensiveSkill,
	avg(nullif(DefenseAvoidanceSkill, 0)) AS AVGDefenseAvoidanceSkill,
	AVG(GroundBallPickup),
	AVG(Control), 	
	AVG(Climb),
	AVG(HopperPickUp),
	AVG(GearFloorPickup),
	AVG(GearHumanPickup),
	avg(nullif(ShootingCycles, 0)) AS AVGShootingCycles,
	AVG(AutonFuelHighHopper),
	AVG(ShootingCycles) + AVG(TeleopGearsScored) + AVG(TeleopGearsMissed) AS AVGTeleopTrips
	from mytable GROUP BY TeamNum ORDER BY TeamNum;");
	$columns_total = mysql_num_fields($sql);
	
	// Get The Field Name
	
	for ($i = 0; $i < $columns_total; $i++) {
		$heading = mysql_field_name($sql, $i);
		$output .= '"'.$heading.'",';
	}
	$output .="\n";
	
	// Get Records from the table
	
	while ($row = mysql_fetch_array($sql)) {
		for ($i = 0; $i < $columns_total; $i++) {
			$output .='"'.$row["$i"].'",';
		}
		$output .="\n";
	}
	
	// Download the file
	
	$filename = "export.csv";
	header('Content-type: application/csv');
	header('Content-Disposition: attachment; filename='.$filename);
	
	echo $output;
	exit;
	
?>