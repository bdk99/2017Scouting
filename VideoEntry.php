<?php include '/var/www/_database/database.php' ?>   

<?php
	
	// Check connection
	if($database === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Escape user inputs for security
	$ID = mysqli_real_escape_string($database, $_POST['ID']); 
	$TeamNum = mysqli_real_escape_string($database, $_POST['TeamNum']);
	$MatchNum = mysqli_real_escape_string($database, $_POST['MatchNum']); 
	$ScouterName = mysqli_real_escape_string($database, $_POST['ScouterName']);
	$AutonMoveBaseline = mysqli_real_escape_string($database, $_POST['AutonMoveBaseline']);
	$AutonGearsScored = mysqli_real_escape_string($database, $_POST['AutonGearsScored']); 
	$AutonFuelScoredLow = mysqli_real_escape_string($database, $_POST['AutonFuelScoredLow']);
	$AutonCycle= mysqli_real_escape_string($database, $_POST['AutonCycle']);
	$AutonFuelScoredHigh = mysqli_real_escape_string($database, $_POST['AutonFuelScoredHigh']); 
	$TeleopGearsMissed = mysqli_real_escape_string($database, $_POST['TeleopGearsMissed']);
	$TeleopGearsScored = mysqli_real_escape_string($database, $_POST['TeleopGearsScored']);
	$TeleopFuelScoredHigh1 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh1']);
	$TeleopFuelScoredHigh2 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh2']);
	$TeleopFuelScoredHigh3 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh3']);
	$TeleopFuelScoredHigh4 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh4']);
	$TeleopFuelScoredHigh5 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh5']);
	$TeleopFuelScoredHigh6 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh6']);
	$TeleopFuelScoredHigh7 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh7']);
	$TeleopFuelScoredHigh8 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh8']);
	$TeleopFuelScoredHigh9 = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredHigh9']);
	$TeleopFuelScoredLow = mysqli_real_escape_string($database, $_POST['TeleopFuelScoredLow']);
	$DefensiveSkill = mysqli_real_escape_string($database, $_POST['DefensiveSkill']);
	$DefenseAvoidanceSkill = mysqli_real_escape_string($database, $_POST['DefenseAvoidanceSkill']);
	$GroundBallPickup = mysqli_real_escape_string($database, $_POST['GroundBallPickup']);
	$Control = mysqli_real_escape_string($database, $_POST['Control']);
	$TIMESTAMP = date('Y-m-d H:i:s');
	$Notes = mysqli_real_escape_string($database, $_POST['Notes']);
	$Climb = mysqli_real_escape_string($database, $_POST['Climb']);
	$HopperPickUp = mysqli_real_escape_string($database, $_POST['HopperPickUp']);
	$GearFloorPickup = mysqli_real_escape_string($database, $_POST['GearFloorPickup']);
	$GearHumanPickup = mysqli_real_escape_string($database, $_POST['GearHumanPickup']);
	$ShootingCycles = mysqli_real_escape_string($database, $_POST['ShootingCycles']);
	$AutonFuelHighHopper = mysqli_real_escape_string($database, $_POST['AutonFuelHighHopper']);
	$Position = mysqli_real_escape_string($database, $_POST['Position']);
	
	
	// attempt insert query execution
	$sql = "INSERT INTO VideoScout". "(ID,TeamNum,MatchNum,ScouterName,AutonMoveBaseline,AutonGearsScored,AutonFuelScoredLow,AutonCycle,AutonFuelScoredHigh,TeleopGearsMissed,TeleopGearsScored,TeleopFuelScoredHigh1,TeleopFuelScoredHigh2,TeleopFuelScoredHigh3,TeleopFuelScoredHigh4,TeleopFuelScoredHigh5,TeleopFuelScoredHigh6,TeleopFuelScoredHigh7,TeleopFuelScoredHigh8,TeleopFuelScoredHigh9,TeleopFuelScoredLow,DefensiveSkill,DefenseAvoidanceSkill,GroundBallPickup,Control,TIMESTAMP,Notes,Climb,HopperPickUp,GearFloorPickup,GearHumanPickup,ShootingCycles,AutonFuelHighHopper,Position)". "VALUES('$ID','$TeamNum','$MatchNum','$ScouterName','$AutonMoveBaseline','$AutonGearsScored','$AutonFuelScoredLow','$AutonCycle','$AutonFuelScoredHigh','$TeleopGearsMissed','$TeleopGearsScored','$TeleopFuelScoredHigh1','$TeleopFuelScoredHigh2','$TeleopFuelScoredHigh3','$TeleopFuelScoredHigh4','$TeleopFuelScoredHigh5','$TeleopFuelScoredHigh6','$TeleopFuelScoredHigh7','$TeleopFuelScoredHigh8','$TeleopFuelScoredHigh9','$TeleopFuelScoredLow','$DefensiveSkill','$DefenseAvoidanceSkill','$GroundBallPickup','$Control','$TIMESTAMP','$Notes','$Climb','$HopperPickUp','$GearFloorPickup','$GearHumanPickup','$ShootingCycles','$AutonFuelHighHopper','$Position')";
	
	if(mysqli_query($database, $sql)){
		echo "Records added successfully.";
	} 
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($database);
	}
	
	// close connection
	mysqli_close($database);
	header("Location: http://192.168.100.100/VideoScouting.php");
	exit();
?>