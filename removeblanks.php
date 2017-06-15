<?php include 'components/authentication.php' ?>     
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>    
<?php include '/var/www/_database/database.php' ?>   

<?php if($current_user == "admin" or $current_user == "root"){
	mysqli_query($database,"DELETE FROM mytable WHERE teamnum = '0' ");
	echo "<center>";
	echo "<h2>BLANK ENTRIES REMOVED</h2>";
	echo "</center>";
}
else
{
	echo "<center>";
	echo "<h1>YOU ARE NOT PERMITTED TO ACCESS THIS PAGE!</h1>";
	echo "</center>";
}?>