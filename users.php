<?php include 'components/authentication.php' ?>     
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>     
<?php 
    if($_GET["request"]=="profile-update" && $_GET["status"]=="success"){
        $dialogue="Your profile update was successful! ";
	}
    else if($_GET["request"]=="profile-update" && $_GET["status"]=="unsuccess"){
        $dialogue="Your profile update was not at all successful! ";
	}
    else if($_GET["request"]=="login" && $_GET["status"]=="success"){
        $dialogue="Welcome back again! ";
	}
?>


<?php include '/var/www/_database/database.php' ?>   
<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
<center><h1 class="rainbowize">Users</h1></center>


 

<?php

	if ($current_user == "admin" or $current_user =="ItalianoBaffi" or $current_user =="root") {
$result = mysqli_query($database,"SELECT * FROM 2017_game.user");
	echo "<center>";
		
	
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
	echo "</center>";
	}
	else
	{
		echo "<center>";
		echo "<h1>YOU ARE NOT PERMITTED TO ACCESS THIS PAGE!</h1>";
		echo "</center>";
		}
?>
