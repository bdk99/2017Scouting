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

<body>
	<center>
		<br>
		<br>
		<br>
		<form action="strategytable.php" method="post">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<label for="TeamNum" class="mdl-textfield__label">TeamNum</label>
				<input type="text" name="TeamNum" id="TeamNum" class="mdl-textfield__input"/>
			</div> 
			
			<div href="strategytable.php">
				<button id="demo-menu-lower-right"
				class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
					<value="Submit">
						SUBMIT
					</button>
					<ul class="nav text-center">
					<br>
						<a href="all-users.php">View all users</a><br>
						<a href="components/logout.php">Logout</a>
					</ul>
				</div>
			</form>
		</center>
	</body>													