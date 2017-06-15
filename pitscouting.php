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
	
	<meta name="viewport" content="width=device-width, initial-scale=1"   /> 
	<link rel="stylesheet" href="/mdl/material.min.css">
	<script src="/mdl/material.min.js"></script>
	
	<style>
		.closebtn {
		margin-left: 15px;
		color: white;
		font-weight: bold;
		float: right;
		font-size: 22px;
		line-height: 20px;
		cursor: pointer;
		transition: 0.3s;
		}
		.closebtn:hover {
		color: black;
		}
		td.back{
		float:center;
		padding-top: 20px;
		padding-bottom: 20px;
		padding-right: 310px;
		padding-left: 310px;
		font-size: 1em;	
		}
		td.center{
		padding-top: 20px;
		padding-bottom: 20px;
		padding-right: 30px;
		padding-left: 60px;
		font-size: 1em;
		}
		table1 {
		width:20%;   
		float:center;
		border-left:10;
		padding-top: 50px;
		padding-right: 30px;
		padding-bottom: 50px;
		padding-left: 60px;
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
		input[type='radio'] {
		transform: scale(1);
		}
		@font-face {
		font-family: 'Roboto';
		src: url('RobotoTTF/Roboto-Regular.tff') format('truetype');
		}
		#blahblah {
		font-family: 'Roboto';
		}
		.alert {
		padding: 20px;
		background-color: #f44336;
		color: white;
		opacity: 5;
		transition: opacity 0.6s;
		margin-bottom: 15px;
		}
		
		.alert.info {background-color: #2196F3;}
		.alert.warning {background-color: red;}
		.alert.success {background-color: #32cd32;}
		
	</style>
	<!--<script>
		$(document).bind("contextmenu",function(e) {
		e.preventDefault();
		});
		$(document).keydown(function(e){
		if(e.which === 123){
		return false;
		}
		});
	</script>-->
</head>
<center>
	<div class="container">	
		<div class="row clearfix">
			<h1 class="rainbowize">Pit Scouting</h1>
			<table width="600" border="0" cellspacing="1" cellpadding="2" style="color=#FF9100">
				<form action="PitEntry.php" method="post">
					
					<?php if($current_user == "admin" or $current_user == "root"){
						$result = mysqli_query($database,"SELECT COUNT(teamnum) FROM pit");
						$test=mysqli_num_rows($result);
						if ($number>0){?>
						<div class="alert success">
							<span class="closebtn">&times;</span>  
							<strong>Success!</strong> Pit Scouting Database currently contains 
							<?php
								//get results from database
								$result = mysqli_query($database,"SELECT COUNT(teamnum) FROM mytable");
								
								$all_property = array();  //declare an array for saving property
								//showing property
								while ($property = mysqli_fetch_field($result)) {
									array_push($all_property, $property->name);  //save those to array
								}
								echo '</tr>'; //end tr tag
								
								//showing all data
								while ($row = mysqli_fetch_array($result)) {
									foreach ($all_property as $item) {
										echo  $row[$item]; //get items using property value
									}
								}
							?> entries 
						</div>
						<script>
							var close = document.getElementsByClassName("closebtn");
							var i;
							
							for (i = 0; i < close.length; i++) {
								close[i].onclick = function(){
									var div = this.parentElement;
									div.style.opacity = "0";
									setTimeout(function(){ div.style.display = "none"; }, 600);
								}
							}
						</script>
					<?php } } ?>
					
					<h5 class="header mdl-shadow--16dp">START</h5>
					<table>
						<tr>
							<center>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<label for="scouter" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Scouter 1</label>
									<input type="text" name="scouter" id="scouter" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
								</div> 
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<label for="scouter2" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Scouter 2</label>
									<input type="text" name="scouter2" id="scouter2" class="mdl-textfield__input"/>
								</div> 
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<label for="TeamNum" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Team #</label>
									<input type="number" min="1" max="8000" name="TeamNum" id="TeamNum" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
								</div>									
							</center>
						</tr>
						<tr>
							<center>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<label for="RecentUpgrades" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">RecentUpgrades</label>
									<input type="text" name="RecentUpgrades" id="RecentUpgrades" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
								</div> 
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">		
									<label for="Strengths" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Strengths</label>
									<input type="text" name="Strengths" id="Strengths" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<label for="Weaknesses" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Weaknesses</label>
									<input type="text" name="Weaknesses" id="Weaknesses" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
								</div> 
							</center>
						</tr>
					</table>
					<DIV CLASS="MDL-SHADOW--2DP" STYLE="PADDING:5PX; WIDTH:70%">
						<table1 style="padding:5px">
							<th>PreloadGears</th>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="PreloadGears" id="PreloadGears"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="PreloadGears" id="PreloadGears"  class="mdl-radio__button" value="0"><span> No</span> </label>
						</table1>
						<table1 style="padding:5px">
							<th>PreloadFuel</th>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="PreloadFuel" id="PreloadFuel"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="PreloadFuel" id="PreloadFuel"  class="mdl-radio__button" value="0"><span> No</span> </label>
						</table1>
					</div>
					<br>
					<h5 class="header mdl-shadow--16dp">AUTON</h5>
					<br>
					<H4>AUTON SCORING</H4>
					<DIV CLASS="MDL-SHADOW--2DP" STYLE="PADDING:5PX; WIDTH:70%">	
						<br>
						<TABLE1 STYLE="PADDING:5PX">
							<TH>LowGoal</TH>
							<LABEL CLASS="MDL-RADIO MDL-JS-RADIO MDL-JS-RIPPLE-EFFECT" STYLE="PADDING:1PX 20PX"><INPUT TYPE="RADIO"  NAME="LowGoalAuton" ID="LowGoalAuton"  CLASS="MDL-RADIO__BUTTON" VALUE="1" <?php if($current_user != "admin") {?> required <?php }?>><SPAN> Yes</SPAN> </LABEL>							
							<LABEL CLASS="MDL-RADIO MDL-JS-RADIO MDL-JS-RIPPLE-EFFECT" STYLE="PADDING:1PX 20PX"><INPUT TYPE="RADIO"  NAME="LowGoalAuton" ID="LowGoalAuton"  CLASS="MDL-RADIO__BUTTON" VALUE="0"><SPAN> No</SPAN> </LABEL>
						</TABLE1>
						
						
						<TABLE1 STYLE="PADDING:5PX">
							<TH>HighGoal</TH>
							<LABEL CLASS="MDL-RADIO MDL-JS-RADIO MDL-JS-RIPPLE-EFFECT" STYLE="PADDING:1PX 20PX"><INPUT TYPE="RADIO"  NAME="HighGoalAuton" ID="HighGoalAuton"  CLASS="MDL-RADIO__BUTTON" VALUE="1" <?php if($current_user != "admin") {?> required <?php }?>><SPAN> Yes</SPAN> </LABEL>							
							<LABEL CLASS="MDL-RADIO MDL-JS-RADIO MDL-JS-RIPPLE-EFFECT" STYLE="PADDING:1PX 20PX"><INPUT TYPE="RADIO"  NAME="HighGoalAuton" ID="HighGoalAuton"  CLASS="MDL-RADIO__BUTTON" VALUE="0"><SPAN> No</SPAN> </LABEL>
						</TABLE1>
						
						
						<table1 style="padding:5px">
							<th>Gears</th>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearsAuton" id="GearsAuton"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearsAuton" id="GearsAuton"  class="mdl-radio__button" value="0"><span> No</span> </label>
						</table1>
						<br>
						<br>
						<table1 style="padding:5px">
							<th>Auton Baseline</th>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonBaseline" id="AutonBaseline"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonBaseline" id="AutonBaseline"  class="mdl-radio__button" value="0"><span> No</span> </label>
						</table1>
						<br>
						<br>
					</DIV>
					<br>
					<H4>HOPPER STUFF</H4>
					<DIV CLASS="MDL-SHADOW--2DP" STYLE="PADDING:5PX; WIDTH:70%">
						<TABLE1 STYLE="PADDING:5PX">
							<TH>HoppersAuton</TH>
							<LABEL CLASS="MDL-RADIO MDL-JS-RADIO MDL-JS-RIPPLE-EFFECT" STYLE="PADDING:1PX 20PX"><INPUT TYPE="RADIO"  NAME="HoppersAuton" ID="HoppersAuton"  CLASS="MDL-RADIO__BUTTON" VALUE="1" <?php if($current_user != "admin") {?> required <?php }?>><SPAN> Yes</SPAN> </LABEL>							
							<LABEL CLASS="MDL-RADIO MDL-JS-RADIO MDL-JS-RIPPLE-EFFECT" STYLE="PADDING:1PX 20PX"><INPUT TYPE="RADIO"  NAME="HoppersAuton" ID="HoppersAuton"  CLASS="MDL-RADIO__BUTTON" VALUE="0"><SPAN> No </SPAN> </LABEL>
						</TABLE1>
						
						<TABLE1 STYLE="PADDING:5PX">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<label for="HopperReliability" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">HopperReliability (%)</label>
								<input type="number" min="0" max="100" name="HopperReliability" id="HopperReliability" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
							</div> 
						</TABLE1>
						
					</DIV>
					<br>
					<br>
					
					<h5 class="header mdl-shadow--16dp">TELEOP</h5> 
					<br>
					<H4>FUEL</H4>
					<div class="mdl-shadow--2dp" style="padding:5px; width:70%">	
						<br>
						<table1 style="padding:5px">
							<th>FuelFloorPickup</th>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="FuelFloorPickup" id="FuelFloorPickup"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="FuelFloorPickup" id="FuelFloorPickup"  class="mdl-radio__button" value="0"><span> No</span> </label>
						</table1>
						<table1 style="padding:5px">
							<th>HighGoal</th>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="HighGoalTeleop" id="HighGoalTeleop"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="HighGoalTeleop" id="HighGoalTeleop"  class="mdl-radio__button" value="0"><span> No</span> </label>
						</table1>
						<table1 style="padding:5px">
							<th>LowGoal</th>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="LowGoalTeleop" id="LowGoalTeleop"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="LowGoalTeleop" id="LowGoalTeleop"  class="mdl-radio__button" value="0"><span> No </span> </label>
						</table1>
						<br>
						<br>
						<table1 style="padding:5px">
							<th>40 KPA</th>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="KPA" id="KPA"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="KPA" id="KPA"  class="mdl-radio__button" value="0"><span> No</span> </label>
						</table1>
						
						<br>
						<table1 style="padding:5px">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<label for="ReliabilityPercentFloorPickup" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Floor Pickup Reliability (%)</label>
								<input type="text" name="ReliabilityPercentFloorPickup" id="ReliabilityPercentFloorPickup" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
							</div> 
						</table1>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label for="ShootingSpeed" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">ShootingSpeed (BPS)</label>
							<input type="text" name="ShootingSpeed" id="ShootingSpeed" class="mdl-textfield__input"<?php if($current_user != "admin") {?> required <?php }?> />
						</div> 
					</table>
				</div>
				<br>
				<H4>GEAR PICKUP</H4>
				<div class="mdl-shadow--2dp" style="padding:5px; width:70%">	
					<br>
					<table1 style="padding:5px">
						<th>GearHumanPickup</th>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearHumanPickup" id="GearHumanPickup"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearHumanPickup" id="GearHumanPickup"  class="mdl-radio__button" value="0"><span> No</span> </label>
					</table1>
					
					<table1 style="padding:5px">
						<th>GearFloorPickup</th>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearFloorPickup" id="GearFloorPickup"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearFloorPickup" id="GearFloorPickup"  class="mdl-radio__button" value="0"><span> No </span> </label>
					</table1>
					<table1 style="padding:5px">
						<th>PlayerStationVision</th>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="PlayerStationVision" id="PlayerStationVision"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="PlayerStationVision" id="PlayerStationVision"  class="mdl-radio__button" value="0"><span> No</span> </label>
					</table1>	
					<br>
					<br>
					<table1 style="padding:5px">
						<th>GearsTeleop</th>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearsTeleop" id="GearsTeleop"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearsTeleop" id="GearsTeleop"  class="mdl-radio__button" value="0"><span> No </span> </label>
					</table1>
				</div>
				<br>
				<H4>CLIMBING</H4>
				<div class="mdl-shadow--2dp" style="padding:5px; width:70%">	
					<br>
					<table1 style="padding:5px">
						<th>Climb</th>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Climb" id="Climb"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Climb" id="Climb"  class="mdl-radio__button" value="0"><span> No</span> </label>
					</table1>
					<br>
					<table1 style="padding:5px">		
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label for="ClimbSpeed" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">ClimbSpeed</label>
							<input type="text" name="ClimbSpeed" id="ClimbSpeed" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
						</div> 
					</table1>
					<table1 style="padding:5px">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label for="ClimbReliability" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">ClimbReliability (%)</label>
							<input type="text" min="0" max="100" name="ClimbReliability" id="ClimbReliability" class="mdl-textfield__input"  <?php if($current_user != "admin") {?> required <?php }?>/>
						</div> 
					</table1>
				</div>
				<br>
				<H4>HUMAN / HOPPER</H4>
				<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
					<br>
					<table1 style="padding:5px">
						<th>Field Hoppers</th>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="HoppersTeleop" id="HoppersTeleop"  class="mdl-radio__button" value="1" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span> </label>							
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="HoppersTeleop" id="HoppersTeleop"  class="mdl-radio__button" value="0"><span> No</span> </label>
					</table1>
					<br>
					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<label for="HPReliability" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Human Pickup Reliability (%)</label>
						<input type="text" name="HPReliability" id="HPReliability" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
					</div> 
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<label for="CapacityofBalls" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Hopper Size</label>
						<input type="text" min="0" max="150" name="CapacityofBalls" id="CapacityofBalls" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
					</div> 
				</div>
				<br>
				<h5 class="header mdl-shadow--16dp">NOTES</h5>
				<br>
				<H4>NOTES</H4>
				<td class="center">
					<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label for="Difficulties" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Difficulties</label>
							<input type="text" name="Difficulties" id="Difficulties" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label for="WantInAlliance" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">What they want in alliance</label>
							<input type="text" name="WantInAlliance" id="WantInAlliance" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label for="Inputter" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Data Entry User</label>
							<input type="text" min="0" max="1" name="Inputter" id="Inputter" class="mdl-textfield__input" value="<?php echo $_SESSION['user_username'];?>" readonly <?php if($current_user != "admin") {?> required <?php }?>/>
						</div> 
						<h6 <?php if($current_user != "admin" and $current_user != "root") {?> hidden="hidden"<?php }?>>Disregard must be approved by Brendan before used</h6>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php if($current_user != "admin" and $current_user != "root") {?> readonly hidden="hidden"<?php }?>>
							<label for="Disregard" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800" >Disregard</label>
							<input type="number" min="0" max="1" name="Disregard" id="Disregard" class="mdl-textfield__input" <?php if($current_user != "admin" and $current_user != "root") {?> readonly hidden="hidden"<?php }?>/>
						</div> 
						<br>
						
					</div>
				</td>
				
				<br>
				<center>				
					<nav>
						<button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" value="Submit">
							SUBMIT
						</button>
					</nav>
				</center>
			</form>
			<ul class="nav text-center">
				<li><a href="all-users.php">View all users</a></li>
				<li><a href="reviews.php">Give Us Feedback!</a></li>
				<?php if($current_user == "admin" or $current_user == "root" or $current_user == "Shiffy"){?>
					<li><a href="Chat2/">Admin Live Chat</a></li>
				<?php }?>
				<li><a href="components/logout.php">Logout</a></li>
			</ul>
		</div>
	</div>		
</center>		
<style>
	.fblogo {
	display: inline-block;
	margin-left: auto;
	margin-right: auto;
	height: 180px;
	width:210px;
	}
	#images{
	text-align:center;
	}
</style>
<div id="images">
<img class="fblogo" border="0" alt="robotnowork" src="memes/robotnowork.jpg"/></a>
<img class="fblogo" border="0" alt="fuel" src="memes/fuel.jpg"/></a>
<img class="fblogo" border="0" alt="ducktape" src="memes/ducktape.jpg"/></a>
<img class="fblogo" border="0" alt="tftlogo" src="tft.jpg"/></a>
<img class="fblogo" border="0" alt="auton" src="memes/download.jpg"/></a>   
<img class="fblogo" border="0" alt="communication" src="memes/communication.jpg"/></a>   
<img class="fblogo" border="0" alt="9seed" src="memes/9seed.jpg"/></a>   
</div>																																		
