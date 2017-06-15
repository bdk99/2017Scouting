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
</head>
<style>
	
	.rainbowize {
	background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
	background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
	color:transparent;
	-webkit-background-clip: text;
	background-clip: text;
	}
	
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
	#myDiv {
	display: none;
	text-align: center;
	}
</style>
<script>
	$(document).bind("contextmenu",function(e) {
		e.preventDefault();
	});
	$(document).keydown(function(e){
		if(e.which === 123){
			return false;
		} 
	});
	
</script>
<center>
	<body style="margin:0;" onload = "startTimer()">
		<div class="container">
			<div class="row clearfix">
				<h1 name="title" class="rainbowize">Team 3641 Video Scouting</h1>						
				<table width="800" border="0" cellspacing="1" cellpadding="2" style="color=#FF9100">
					<form action="VideoEntry.php" method="post" id="myForm">						
						
						<?php if($current_user == "admin" or $current_user == "root"){
							$result = mysqli_query($database,"SELECT teamnum FROM mytable");
							$test=mysqli_num_rows($result);
							if ($number>0){ ?>
							<div class="alert success">
								<span class="closebtn">&times;</span>  
								<strong>Success!</strong>Scouting Database currently contains 
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
						
						<!--Missing Entries? Find out here --><!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^-->
						<?php if ($current_user == "admin" or $current_user =="ItalianoBaffi" or $current_user =="root" or $current_user =="Shiffy") { ?>
							<?php    //get results from database
								$result = mysqli_query($database,"SELECT DISTINCT teamnum FROM 2017_game.mytable WHERE matchnum = (select max(matchnum) from mytable matchnum);");
								$number=mysqli_num_rows($result);
								$test = mysqli_query($database,"SELECT COUNT(DISTINCT teamnum) FROM 2017_game.mytable WHERE matchnum = (select max(matchnum) from mytable matchnum);");
								if ($number<6 && $number>0)
								{
								?>
								<div class="alert warning">
									<span class="closebtn">&times;</span>  
									<strong>Verify Entries!</strong> Last Match only has 
									<?php
										$all_property = array();  //declare an array for saving property
										
										//showing property
										while ($property = mysqli_fetch_field($test)) {
											array_push($all_property, $property->name);  //save those to array
										}
										echo '</tr>'; //end tr tag
										
										//showing all data
										while ($row = mysqli_fetch_array($test)) {
											foreach ($all_property as $item) {
												echo  $row[$item]; //get items using property value
											}
										}
									?> different entries
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
							<?php }}?>
							<!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^--><!--Missing Entries? Find out here ^^-->						
					</table>
					<!--Users Entered When Missing entries from Database--><!--Users Entered When Missing entries from Database--><!--Users Entered When Missing entries from Database--><!--Users Entered When Missing entries from Database--><!--Users Entered When Missing entries from Database-->
					<?php if($current_user == "admin" or $current_user =="ItalianoBaffi" or $current_user =="root" or $current_user =="Shiffy") {
						//get results from database
						$result = mysqli_query($database,"SELECT DISTINCT teamnum FROM 2017_game.mytable WHERE matchnum = (select max(matchnum) from mytable matchnum)");
						$number=mysqli_num_rows($result);
						$test = mysqli_query($database,"SELECT scoutername FROM 2017_game.mytable WHERE matchnum = (select max(matchnum) from mytable matchnum)");
						
						if ($number<6 && $number>0)
						{
						?>
						<div class="alert warning">
							<span class="closebtn">&times;</span>  
							<strong>Verify Entries!</strong> Entries Include Users....
							<?php
								echo "<table border='0'>";
								
								$i = 0;
								while($row = $test->fetch_assoc())
								{
									if ($i == 0) {
										$i++;
									}
									echo "<tr>";
									foreach ($row as $value) {
										echo "<td>" . $value . "</td>";
									}
									echo "</tr>";
								}
								echo "</table>";
								mysqli_close($database);
								
							?>
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
					<?php }}?>
					<!--Users Entered When Missing entries from Database--><!--Users Entered When Missing entries from Database--><!--Users Entered When Missing entries from Database--><!--Users Entered When Missing entries from Database--><!--Users Entered When Missing entries from Database-->						
					
					<?php
						//get results from database
						$confirm = mysqli_query($database,"SELECT COUNT(ScouterName)-1 FROM 2017_game.mytable WHERE matchnum = (select max(matchnum) from 2017_game.mytable matchnum) and ScouterName='$current_user'");
						if ($confirm == 0)
						{
							$confirmfinal = mysqli_query($database,"SELECT COUNT(ScouterName) FROM 2017_game.mytable WHERE matchnum = (select max(matchnum) from 2017_game.mytable matchnum) and ScouterName='$current_user'");
							if ($confirmfinal == 0)
							{
							?>
							<div class="alert success">
								<span class="closebtn">&times;</span>  
								<strong>Last Entry Successfully Entered!</strong>
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
							<?php }
							else{ 
								if($current_user != "admin" and $current_user != "ItalianoBaffi"){?>
								<div class="alert warning">
									<span class="closebtn">&times;</span>  
									<strong> If you entered last match your entry FAILED!  Talk to an administrator before proceeding with the next match</strong>
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
								</script><?php }}}?>
								
								<table width="800" border="0" cellspacing="1" cellpadding="2" style="color=#FF9100">
									<h5 class="header mdl-shadow--16dp">PRE-GAME</h5>
									<tr>
										<td class="center">
											<!--UNCOMMENT FOR OFF COMPETITION--> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<label for="TeamNum" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Team #</label>
												<input type="number"  min="1" max="8000" name="TeamNum" id="TeamNum" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
											</div>
										</td><!--UNCOMMENT FOR OFF COMPETITION-->
										
										
										
										<!--UNCOMMENT FOR HOWELL--><!--<div>	
											<center>
											<select id="dropdown" <?php if($current_user != "admin"){?> onchange="change" <?php }?> name="TeamNum" id="TeamNum" <?php if($current_user != "admin") {?> required <?php }?> >
											<option value="">Team Number</option>
											<option value="1">1</option>
											<option value="27">27</option>
											<option value="51">51</option>
											<option value="66">66</option>
											<option value="201">201</option>
											<option value="302">302</option>
											<option value="470">470</option>
											<option value="830">830</option>
											<option value="1189">1189</option>
											<option value="1502">1502</option>
											<option value="2145">2145</option>
											<option value="2612">2612</option>
											<option value="2834">2834</option>
											<option value="3414">3414</option>
											<option value="3536">3536</option>
											<option value="3568">3568</option>
											<option value="3641">3641</option>
											<option value="3707">3707</option>
											<option value="4362">4362</option>
											<option value="4384">4384</option>
											<option value="4776">4776</option>
											<option value="4840">4840</option>
											<option value="4998">4998</option>
											<option value="5203">5203</option>
											<option value="5235">5235</option>
											<option value="5238">5238</option>
											<option value="5502">5502</option>
											<option value="5517">5517</option>
											<option value="5523">5523</option>
											<option value="5530">5530</option>
											<option value="5538">5538</option>
											<option value="5688">5688</option>
											<option value="5695">5695</option>
											<option value="5697">5697</option>
											<option value="5703">5703</option>
											<option value="5704">5704</option>
											<option value="6081">6081</option>
											<option value="6101">6101</option>
											<option value="6591">6591</option>
											<option value="6742">6742</option>
											
											</select>
											<br>
											<hr>
											If Team Number does not appear in this box   Contact an Administrator
											</center>
										</div>-->
									</center>
								</td><!--------UNCOMMENT FOR HOWELL-->
								<td class="center">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<label for="MatchNum" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--blue-grey-800">Match #</label>
										<input type="number"  min="1" max="150" name="MatchNum" id="MatchNum" class="mdl-textfield__input" <?php if($current_user != "admin") {?> required <?php }?>/>
									</div>
								</td>
								<td class="center">
									
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<label for="ScouterName" style="font-size:15px;" class="mdl-textfield__label mdl-color-text--FF9100-grey-800">ScouterName</label>
										<input type="text" name="ScouterName" id="ScouterName" class="mdl-textfield__input" value="<?php echo $_SESSION['user_username'];?>"  readonly <?php if($current_user != "admin") {?> required <?php }?>/>
									</div>
								</td>
								<br>
				</tr>
			</table>
			<td class="center">
				<select id="dropdown" name="Position" id="Position" <?php if($current_user != "admin"){?> <!--onchange="change"--> <?php }?>>
				<option value="">Position</option>
				<option value="R1">R1</option>
				<option value="R2">R2</option>
				<option value="R3">R3</option>
				<option value="B1">B1</option>
				<option value="B2">B2</option>
				<option value="B3">B3</option>
			</select>
		</td>
		<h5 class="header mdl-shadow--16dp">AUTON</h5>
		<tr>
			<center>
				<h5>Amount of balls scored in Low Goal</h5>
				<h6 class="notice">Notice: If they score high goals... please disregard low goals! (Make Low Goal None)</h6>
				<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredLow" id="AutonFuelScoredLow"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> None</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredLow" id="AutonFuelScoredLow"  value="1" class="mdl-radio__button"><span> Few</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredLow" id="AutonFuelScoredLow"  value="2" class="mdl-radio__button"><span> LessThanHalf</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredLow" id="AutonFuelScoredLow"  value="3" class="mdl-radio__button"><span> Half</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredLow" id="AutonFuelScoredLow"  value="4" class="mdl-radio__button"><span> More Than Half</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredLow" id="AutonFuelScoredLow"  value="5" class="mdl-radio__button"><span> Most</span></label>
				</div>
			</center>
		</tr>
		<tr>
			<center>
				<h5>Amount of balls scored in HighGoal (preloaded 10 only)</h5>
				<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredHigh" id="AutonFuelScoredHigh"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> None</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredHigh" id="AutonFuelScoredHigh"  value="1" class="mdl-radio__button"><span> Few</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredHigh" id="AutonFuelScoredHigh"  value="2" class="mdl-radio__button"><span> LessThanHalf</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredHigh" id="AutonFuelScoredHigh"  value="3" class="mdl-radio__button"><span> Half</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredHigh" id="AutonFuelScoredHigh"  value="4" class="mdl-radio__button"><span> More Than Half</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelScoredHigh" id="AutonFuelScoredHigh"  value="5" class="mdl-radio__button"><span> Most</span></label>
				</div>
			</center>
		</tr>
		<tr>
			<center>
				<h5>Amount of balls scored in High Goal WITH hopper</h5>
				<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelHighHopper" id="AutonFuelHighHopper"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?> ><span> None</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelHighHopper" id="AutonFuelHighHopper"  value="1" class="mdl-radio__button"><span> Few</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelHighHopper" id="AutonFuelHighHopper"  value="2" class="mdl-radio__button"><span> LessThanHalf</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelHighHopper" id="AutonFuelHighHopper"  value="3" class="mdl-radio__button"><span> Half</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelHighHopper" id="AutonFuelHighHopper"  value="4" class="mdl-radio__button"><span> More Than Half</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonFuelHighHopper" id="AutonFuelHighHopper "  value="5" class="mdl-radio__button"><span> Most</span></label>
				</div>
			</center>
		</tr>
		
		<br>
		<br>
		<center>
			<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
				<table1 style="padding:5px">
					<th style="font-family:Roboto-Regular;">AutonBaseline</th>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonMoveBaseline" id="AutonMoveBaseline"  value="1" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> Yes</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonMoveBaseline" id="AutonMoveBaseline"  value="0" class="mdl-radio__button"><span> No</span></label>
				</table1>
				<table1 style="padding:5px">        
					<th>AutonGearsScored</th>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonGearsScored" id="AutonGearsScored"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span>0</span></label>                         
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonGearsScored" id="AutonGearsScored"  value="1" class="mdl-radio__button"><span>1</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonGearsScored" id="AutonGearsScored"  value="2" class="mdl-radio__button"><span>2</span></label>
				</table1>
				<table1 style="padding:5px">
					<th>AutonCycles</th>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonCycle" id="AutonCycle"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> 0</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonCycle" id="AutonCycle"  value="1" class="mdl-radio__button"><span>1</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="AutonCycle" id="AutonCycle"  value="2" class="mdl-radio__button"><span>2</span></label>
				</table1>
			</div>
		</center>
		<h5 class="header mdl-shadow--16dp">TELEOP</h5>
		<center>
			<tr>
				<center>
					<h5>Amount of balls scored in Low Goal</h5>
					<h6 class="notice">Notice: If they score high goals... please disregard low goals! (Make Low Goal None)</h6>
					<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredLow" id="TeleopFuelScoredLow"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> None</span></label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredLow" id="TeleopFuelScoredLow"  value="1" class="mdl-radio__button"><span> Few</span></label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredLow" id="TeleopFuelScoredLow"  value="2" class="mdl-radio__button"><span> LessThanHalf</span></label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredLow" id="TeleopFuelScoredLow"  value="3" class="mdl-radio__button"><span> Half</span></label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredLow" id="TeleopFuelScoredLow"  value="4" class="mdl-radio__button"><span> More Than Half</span></label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredLow" id="TeleopFuelScoredLow"  value="5" class="mdl-radio__button"><span> Most</span></label>
					</center>
				</tr>
				<center>
					<tr>
						
						<h5>TeleopGearsScored</h5>
						<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span>0</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="1" class="mdl-radio__button"><span>1</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="2" class="mdl-radio__button"><span>2</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="3" class="mdl-radio__button"><span>3</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="4" class="mdl-radio__button"><span>4</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="5" class="mdl-radio__button"><span>5</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="6" class="mdl-radio__button"><span>6</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="7" class="mdl-radio__button"><span>7</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="8" class="mdl-radio__button"><span>8</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="9" class="mdl-radio__button"><span>9</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="10" class="mdl-radio__button"><span>10</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="11" class="mdl-radio__button"><span>11</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsScored" id="TeleopGearsScored"  value="12" class="mdl-radio__button"><span>12</span></label>
						</div>
					</tr>
				</center>
				<center>
					<tr>
						<h5>TeleopGearsMissed</h5>
						<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span>0</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="1" class="mdl-radio__button"><span>1</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="2" class="mdl-radio__button"><span>2</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="3" class="mdl-radio__button"><span>3</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="4" class="mdl-radio__button"><span>4</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="5" class="mdl-radio__button"><span>5</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="6" class="mdl-radio__button"><span>6</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="7" class="mdl-radio__button"><span>7</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="8" class="mdl-radio__button"><span>8</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="9" class="mdl-radio__button"><span>9</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="10" class="mdl-radio__button"><span>10</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="11" class="mdl-radio__button"><span>11</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopGearsMissed" id="TeleopGearsMissed"  value="12" class="mdl-radio__button"><span>12</span></label>
						</div>
					</tr>
				</center>
				<tr>
					<center>
						<h5>Amount of balls scored in ShootingCycle1</h5>
						<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredHigh1" id="TeleopFuelScoredHigh1"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> None</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredHigh1" id="TeleopFuelScoredHigh1"  value="1" class="mdl-radio__button"><span> Few</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredHigh1" id="TeleopFuelScoredHigh1"  value="2" class="mdl-radio__button"><span> LessThanHalf</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredHigh1" id="TeleopFuelScoredHigh1"  value="3" class="mdl-radio__button"><span> Half</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredHigh1" id="TeleopFuelScoredHigh1"  value="4" class="mdl-radio__button"><span> More Than Half</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="TeleopFuelScoredHigh1" id="TeleopFuelScoredHigh1"  value="5" class="mdl-radio__button"><span> Most</span></label>
						</div>
					</center>
				</tr>
				<br>
				<tr>
					<center>
						<h5>Amount of balls scored in ShootingCycle 2</h5>
						<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh2" id="TeleopFuelScoredHigh2" value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> None</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh2" id="TeleopFuelScoredHigh2" value="1" class="mdl-radio__button"><span> Few</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh2" id="TeleopFuelScoredHigh2" value="2" class="mdl-radio__button"><span> Less Than Half</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh2" id="TeleopFuelScoredHigh2" value="3" class="mdl-radio__button"><span> Half</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh2" id="TeleopFuelScoredHigh2" value="4" class="mdl-radio__button"><span> More Than Half</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh2" id="TeleopFuelScoredHigh2" value="5" class="mdl-radio__button"><span> Most</span></label>
						</div>
					</center>
				</tr>
				<br>
				<tr>
					<center>
						<h5>Amount of balls scored in ShootingCycle 3</h5>
						<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh3" id="TeleopFuelScoredHigh3" value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> None</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh3" id="TeleopFuelScoredHigh3" value="1" class="mdl-radio__button"><span> Few</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh3" id="TeleopFuelScoredHigh3" value="2" class="mdl-radio__button"><span> Less Than Half</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh3" id="TeleopFuelScoredHigh3" value="3" class="mdl-radio__button"><span> Half</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh3" id="TeleopFuelScoredHigh3" value="4" class="mdl-radio__button"><span> More Than Half</span></label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio" name="TeleopFuelScoredHigh3" id="TeleopFuelScoredHigh3" value="5" class="mdl-radio__button"><span> Most</span></label>
						</div>
					</center>
				</tr>
				<h5>ShootingCycles</h5>
				<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span>0</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="1" class="mdl-radio__button"><span>1</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="2" class="mdl-radio__button"><span>2</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="3" class="mdl-radio__button"><span>3</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="4" class="mdl-radio__button"><span>4</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="5" class="mdl-radio__button"><span>5</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="6" class="mdl-radio__button"><span>6</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="7" class="mdl-radio__button"><span>7</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="8" class="mdl-radio__button"><span>8</span></label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="ShootingCycles" id="ShootingCycles"  value="9" class="mdl-radio__button"><span>9</span></label>
				</div>
				<br><br>
				<h5 class="header mdl-shadow--16dp">END-GAME</h5>
				
				<table width="800" border="0" cellspacing="1" cellpadding="2" style="color=#FF9100">
					<center>
						<tr>
							<h5>Defensive Skill</h5>
							<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefensiveSkill" id="DefensiveSkill"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> N/A</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefensiveSkill" id="DefensiveSkill"  value="1" class="mdl-radio__button"><span>Terrible</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefensiveSkill" id="DefensiveSkill"  value="2" class="mdl-radio__button"><span>Weak</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefensiveSkill" id="DefensiveSkill"  value="3" class="mdl-radio__button"><span>Good</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefensiveSkill" id="DefensiveSkill"  value="4" class="mdl-radio__button"><span>Great</span></label>
							</div>
							<h5>Defensive Avoidance Skill</h5>
							<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefenseAvoidanceSkill" id="DefenseAvoidanceSkill"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> N/A</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefenseAvoidanceSkill" id="DefenseAvoidanceSkill"  value="1" class="mdl-radio__button"><span>Terrible</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefenseAvoidanceSkill" id="DefenseAvoidanceSkill"  value="2" class="mdl-radio__button"><span>Weak</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefenseAvoidanceSkill" id="DefenseAvoidanceSkill"  value="3" class="mdl-radio__button"><span>Good</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="DefenseAvoidanceSkill" id="DefenseAvoidanceSkill"  value="4" class="mdl-radio__button"><span>Great</span></label>
							</div>
							<h5>Ground Ball Pickup</h5>
							<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GroundBallPickup" id="GroundBallPickup"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> No</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GroundBallPickup" id="GroundBallPickup"  value="1" class="mdl-radio__button"><span>Yes</span></label>                        
							</div>
							<h5>Hopper PickUp</h5>
							<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="HopperPickUp" id="HopperPickUp"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> No</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="HopperPickUp" id="HopperPickUp"  value="1" class="mdl-radio__button"><span>Yes</span></label>        
							</div>
							<h5>Climb</h5>
							<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Climb" id="Climb"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span>Didnt Try</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Climb" id="Climb"  value="1" class="mdl-radio__button"><span>Did not Complete</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Climb" id="Climb"  value="2" class="mdl-radio__button"><span>Completed</span></label>
							</div>
							<h5>Driver Skill</h5>
							<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Control" id="Control"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> Not Driven</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Control" id="Control"  value="1" class="mdl-radio__button"><span>Terrible</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Control" id="Control"  value="2" class="mdl-radio__button"><span>Weak</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Control" id="Control"  value="3" class="mdl-radio__button"><span>Good</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="Control" id="Control"  value="4" class="mdl-radio__button"><span>Great</span></label>
							</div>
							<h5>Gear Floor Pickup</h5>
							<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearFloorPickup" id="GearFloorPickup"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> No</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearFloorPickup" id="GearFloorPickup"  value="1" class="mdl-radio__button"><span>Yes</span></label>
							</div>
							<h5>Gear Human Pickup</h5>
							<div class="mdl-shadow--2dp" style="padding:5px; width:70%">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearHumanPickup" id="GearHumanPickup"  value="0" class="mdl-radio__button" <?php if($current_user != "admin") {?> required <?php }?>><span> No</span></label>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" style="padding:1px 20px"><input type="radio"  name="GearHumanPickup" id="GearHumanPickup"  value="1" class="mdl-radio__button"><span>Yes</span></label>
							</div>
						</tr>
					</center>
				</table>
				<br>
				<center>
					<table width="600" border="0" cellspacing="1" cellpadding="2" style="color=#FF9100">
						<tr>
							<td>
								<textarea placeholder="Notes" class="mdl-textfield__input" type="text" maxLength="200" rows="3" name="Notes" id="Notes" ></textarea>
							</td>
						</tr>
					</table>
				</center>
				<br>
				<center>
					<nav>
						
						<a href="VideoEntry.php" name="submit"/>
						<button id="demo-menu-lower-right"
						class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
							<value="Submit">
								SUBMIT
							</button>
						</a>
					</nav>
				</center>
			</form>
			<br>
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
</div>
<script>
	function displayNextImage() {
		x = (x === images.length - 1) ? 0 : x + 1;
		document.getElementById("img").src = images[x];
	}
	function displayNextImage2() {
		x = (x === images.length - 1) ? 0 : x + 1;
		document.getElementById("img2").src = images[x];
	}
	function displayNextImage3() {
		x = (x === images.length - 1) ? 0 : x + 1;
		document.getElementById("img3").src = images[x];
	}
	function displayNextImage4() {
		x = (x === images.length - 1) ? 0 : x + 1;
		document.getElementById("img4").src = images[x];
	}
	
	function displayNextImage5() {
		x = (x === images.length - 1) ? 0 : x + 1;
		document.getElementById("img5").src = images[x];
	}
	function displayNextImage6() {
		x = (x === images.length - 1) ? 0 : x + 1;
		document.getElementById("img6").src = images[x];
	}
	function startTimer() {
		setInterval(displayNextImage, 15000);
		setInterval(displayNextImage2, 15000);
		setInterval(displayNextImage3, 15000);
		setInterval(displayNextImage4, 15000);
		setInterval(displayNextImage5, 15000);
		setInterval(displayNextImage6, 15000);
	}
	
	var images = [], x = -1;
	images[0] = "/Memes/1.jpg";
	images[1] = "/Memes/2.jpg";
	images[2] = "/Memes/3.jpg";
	images[3] = "/Memes/4.jpg";
	images[4] = "/Memes/5.jpg";
	images[5] = "/Memes/6.jpeg";
	images[6] = "/Memes/7.jpg";
	images[7] = "/Memes/8.jpg";
	images[8] = "/Memes/9.jpg";
	images[9] = "/Memes/10.jpg";
	images[10] = "/Memes/11.jpg";
	images[11] = "/Memes/12.jpg";
	images[12] = "/Memes/13.jpg";
	images[13] = "/Memes/14.jpg";
	images[14] = "/Memes/15.jpg";
	images[15] = "/Memes/16.jpg";
	images[16] = "/Memes/17.png";
	images[17] = "/Memes/18.jpg";
	images[18] = "/Memes/19.jpg";
	images[19] = "/Memes/20.jpg";
	images[20] = "/Memes/21.jpg";
	images[21] = "/Memes/22.jpg";
	images[22] = "/Memes/23.jpg";
	images[23] = "/Memes/24.jpg";
	
</script>
</head>

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
<img class="fblogo" id="img" src="/Memes/1.jpg"/>
<img class="fblogo" id="img2" src="/Memes/2.jpg"/>
<img class="fblogo" id="img3" src="/Memes/3.jpg"/>
<img class="fblogo" src="/Memes/tft.jpg"/>
<img class="fblogo" id="img4" src="/Memes/4.jpg"/>
<img class="fblogo" id="img5" src="/Memes/5.jpg"/>
<img class="fblogo" id="img6" src="/Memes/6.jpeg"/>
</hr>
</body>																																																																																									