<?php include '/var/www/_database/database.php' ?>   

<?php
$id = mysqli_real_escape_string($database, $_POST['id']);
$Inputter = mysqli_real_escape_string($database, $_POST['Inputter']);
$TeamNum = mysqli_real_escape_string($database, $_POST['TeamNum']);
$DriveType = mysqli_real_escape_string($database, $_POST['DriveType']);
$RecentUpgrades = mysqli_real_escape_string($database, $_POST['RecentUpgrades']);
$Strengths = mysqli_real_escape_string($database, $_POST['Strengths']);
$Weaknesses = mysqli_real_escape_string($database, $_POST['Weaknesses']);
$Difficulties = mysqli_real_escape_string($database, $_POST['Difficulties']);
$WantInAlliance = mysqli_real_escape_string($database, $_POST['WantInAlliance']);
$PlayerStationVision = mysqli_real_escape_string($database, $_POST['PlayerStationVision']);
$GearFloorPickup = mysqli_real_escape_string($database, $_POST['GearFloorPickup']);
$FuelFloorPickup = mysqli_real_escape_string($database, $_POST['FuelFloorPickup']);
$ReliabilityPercentFloorPickup = mysqli_real_escape_string($database, $_POST['ReliabilityPercentFloorPickup']);
$GearHumanPickup = mysqli_real_escape_string($database, $_POST['GearHumanPickup']);
$FuelHPPickup = mysqli_real_escape_string($database, $_POST['FuelHPPickup']);
$HPReliability = mysqli_real_escape_string($database, $_POST['HPReliability']);
$HopperReliability = mysqli_real_escape_string($database, $_POST['HopperReliability']);
$CapacityofBalls = mysqli_real_escape_string($database, $_POST['CapacityofBalls']);
$Climb = mysqli_real_escape_string($database, $_POST['Climb']);
$ClimbSpeed = mysqli_real_escape_string($database, $_POST['ClimbSpeed']);
$ClimbReliability = mysqli_real_escape_string($database, $_POST['ClimbReliability']);
$GearsTeleop = mysqli_real_escape_string($database, $_POST['GearsTeleop']);
$GearsAuton = mysqli_real_escape_string($database, $_POST['GearsAuton']);
$HoppersTeleop = mysqli_real_escape_string($database, $_POST['HoppersTeleop']);
$HoppersAuton = mysqli_real_escape_string($database, $_POST['HoppersAuton']);
$KPA = mysqli_real_escape_string($database, $_POST['KPA']);
$HighGoalTeleop = mysqli_real_escape_string($database, $_POST['HighGoalTeleop']);
$HighGoalAuton = mysqli_real_escape_string($database, $_POST['HighGoalAuton']);
$LowGoalTeleop = mysqli_real_escape_string($database, $_POST['LowGoalTeleop']);
$LowGoalAuton = mysqli_real_escape_string($database, $_POST['LowGoalAuton']);
$PreloadGears = mysqli_real_escape_string($database, $_POST['PreloadGears']);
$PreloadFuel = mysqli_real_escape_string($database, $_POST['PreloadFuel']);
$AutoTargeting = mysqli_real_escape_string($database, $_POST['AutoTargeting']);
$ShootingSpeed = mysqli_real_escape_string($database, $_POST['ShootingSpeed']);
$TIMESTAMP = date('Y-m-d H:i:s');
$scouter = mysqli_real_escape_string($database, $_POST['scouter']);
$AutonBaseline = mysqli_real_escape_string($database, $_POST['AutonBaseline']);
$Disregard = mysqli_real_escape_string($database, $_POST['Disregard']);
$scouter2 = mysqli_real_escape_string($database, $_POST['scouter2']);

$sql = "INSERT INTO pit". "(id,Inputter,TeamNum,DriveType,RecentUpgrades,Strengths,Weaknesses,Difficulties,WantInAlliance,PlayerStationVision,GearFloorPickup,FuelFloorPickup,ReliabilityPercentFloorPickup,GearHumanPickup,FuelHPPickup,HPReliability,HopperReliability,CapacityofBalls,Climb,ClimbSpeed,ClimbReliability,GearsTeleop,GearsAuton,HoppersTeleop,HoppersAuton,KPA,HighGoalTeleop,HighGoalAuton,LowGoalTeleop,LowGoalAuton,PreloadGears,PreloadFuel,AutoTargeting,ShootingSpeed,TIMESTAMP,scouter,AutonBaseline,Disregard,scouter2)". 
"VALUES('$id','$Inputter','$TeamNum','$DriveType','$RecentUpgrades','$Strengths','$Weaknesses','$Difficulties','$WantInAlliance','$PlayerStationVision','$GearFloorPickup','$FuelFloorPickup','$ReliabilityPercentFloorPickup','$GearHumanPickup','$FuelHPPickup','$HPReliability','$HopperReliability','$CapacityofBalls','$Climb','$ClimbSpeed','$ClimbReliability','$GearsTeleop','$GearsAuton','$HoppersTeleop','$HoppersAuton','$KPA','$HighGoalTeleop','$HighGoalAuton','$LowGoalTeleop','$LowGoalAuton','$PreloadGears','$PreloadFuel','$AutoTargeting','$ShootingSpeed','$TIMESTAMP','$scouter','$AutonBaseline','$Disregard','$scouter2')";	


if(mysqli_query($database, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($database);
}
// close connection
mysqli_close($database);
header("Location: http://192.168.100.100/pitscouting.php");
exit();
?>