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
    include '_database/database.php';
    session_start();
    $current_user = $_SESSION['user_username'];
?>

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1"/> 
	<link rel="stylesheet" href="./mdl/material.min.css">
	<script src="./mdl/material.min.js"></script>
	<link rel="stylesheet" src="./RobotoTFF/Roboto-Regular.tff">
	
	<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
</head>

<html>
<h1><center>Im sorry but reviews are not running at the moment... Please Try again later</center></h1>


</html>