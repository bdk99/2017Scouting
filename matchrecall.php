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

<?php
	
	//test if database failed
	if(mysqli_connect_errno()){
		die("database failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
	}
	$MatchNum = mysqli_real_escape_string($database, $_POST['MatchNum']); 
	//get results from database
	$result = mysqli_query($database,"SELECT * FROM 2017_game.mytable WHERE matchnum='$MatchNum'");
	$all_property = array();  //declare an array for saving property
	
	//showing property
	echo '<table class="data-table">
	<tr class="data-heading">';  //initialize table tag
	while ($property = mysqli_fetch_field($result)) {
		echo '<td>' . $property->name . '</td>';  //get field name for header
		array_push($all_property, $property->name);  //save those to array
	}
	echo '</tr>'; //end tr tag
	
	//showing all data
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		foreach ($all_property as $item) {
			echo '<td>' . $row[$item] . '</td>'; //get items using property value
		}
		echo '</tr>';
	}
	echo "</table>";
?>