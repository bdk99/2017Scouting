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


<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
<?php include '/var/www/_database/database.php' ?>  

<br>
<center>
<h1>To Do</h1>
<h2>Before Howell</h2>
<!--Record Ann Arbors Pit Scouting time in everyones individual user profile-->
********* Make Automated Driver Strategy Sheet look nicer *********
<br>
See if predictive sheet works in libreoffice
<br>
Work on predictive sheet
<br>
Train Dawson about Notepad ++, Winscp, and make sure he can login to putty
<br>
Mock Pit Scouting Training
<br>
Make copies of Pit Scouting Sheet
<?php if ($current_user == "admin"){?>
<h4>After Howell</h4>
Backup Howells data
<br>
Delete Database Contents
<?php }?>
</center>
