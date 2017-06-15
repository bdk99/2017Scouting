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
	
	<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
	</head>
	
	<style>
	td{
	padding-top: 20px;
	padding-bottom: 20px;
	font-size: 1em;
	}
	div .mdl-textfield__label:after {
	background: #3498DB;
	}
	hr {
    background-color: grey;
	border: 0px solid grey;
	}
	h5.header{
	border: 1px solid grey;
	background-color:#FF5722;
	color:white
	}
	h6.notice{
	color:orange;
	}
	</style>
<center>
	<table width="600" border="0" cellspacing="1" cellpadding="2" style="color=#FF9100">
	<form action="reviewsentry.php" method="post" id="myForm">
	<center><h5 class="header mdl-shadow--16dp ">FeedBack</h5></center>

	<tr>
	<td>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-shadow--2dp">
	<label for="Like" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">What do you like?</label>
	<input type="text" name="Like" id="Like" class="mdl-textfield__input"/>
	</div>
	</td>
	<td>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-shadow--2dp">
	<label for="DidntLike" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">What didn't you like?</label>
	<input type="text" name="DidntLike" id="DidntLike" class="mdl-textfield__input"/>
	</div>
	</td>
		</tr>
		<tr>
	<td>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-shadow--2dp">
	<label for="ScouterName" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">ScouterName</label>
	<input type="text" name="ScouterName" id="ScouterName" class="mdl-textfield__input" value="<?php echo $_SESSION['user_username'];?>"readonly required/>
	</div>
	</td>

	</br>
	<td>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-shadow--2dp">
	<label for="test" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">What do you think we need to change?</label>
	<input type="text" name="test" id="test" class="mdl-textfield__input"/>
	</div>
	</td>
	</tr>
	</table>
</center>
	<center>
	<nav>
	<button id="demo-menu-lower-right"
	class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
	<value="Submit">
	SUBMIT
	</button>
	</nav>
	</center>
</form>