<?php include 'components/authentication.php' ?> 
<?php include 'components/session-check-profile.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?> 
<?php include 'controllers/base/style.php' ?>
<?php 
    if($_GET["follow"]=="same"){
        $dialogue="Your can't follow yourself! ";
	}
?>
<script>
	$.growl("<?php echo $dialogue; ?> ", {
		animate: {
			enter: 'animated zoomInDown',
			exit: 'animated zoomOutUp'
		}								
	});
</script>
<?php 
    session_start();
    $current_user = $_SESSION['user_username'];
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $profile_username=$rws['user_username'];
?>

<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<div class="profile">
	<div class="row clearfix">
		<!-- <div class="col-md-12 column"> -->
		<div>
			<center>
				<img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive profile-avatar">
			</center>
			<h1 class="text-center profile-text profile-name"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
			<h6 class="text-center profile-text profile-name"><strong>(AKA:  <?php echo $rws['user_username'];?>)</strong></h6>	
			<h2 class="text-center profile-text profile-profession"><?php echo $rws['user_profession'];?></h2>
			<center><?php
				//get results from database
				$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='$user_username'");
				$AnnArbor=mysqli_num_rows($sql40);
				$totaltimeannarbor=(($AnnArbor *9)/60);
				/*echo "AnnArbor ";
					echo $AnnArbor;
					echo "<br>";
					echo "Total Time AnnArbor ";
					echo $totaltimeannarbor;
				echo "<br>";*/
				
				$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='$user_username'");
				$Howell=mysqli_num_rows($sql50);
				$totaltimehowell=(($Howell *9)/60);
				/*echo "Howell ";
					echo $Howell;
					echo "<br>";
					echo "Total Time Howell ";
					echo $totaltimehowell;
				echo "<br>";*/
				
				$sql60= mysqli_query($database,"SELECT matchnum FROM States WHERE ScouterName='$user_username'");
				$states=mysqli_num_rows($sql60);
				$totaltimestates=(($states *9)/60);
				/*echo "States ";
					echo $states;
					echo "<br>";
					echo "Total Time States ";
					echo $totaltimestates;
				echo "<br>";*/
				
				$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='$user_username'");
				$active=mysqli_num_rows($sql30);
				$totaltimeactive=(($active * 6)/60);
				/*echo "Active ";
					echo $active;
					echo "<br>";
					echo "Total Time Active ";
					echo $totaltimeactive;
				echo "<br>";*/
				
				$totalmatchtime=($totaltimeannarbor + $totaltimehowell + $totaltimestates + $totaltimeactive);
				/*echo "TOTALMATCHTIME: ";
					echo $totalmatchtime;
					echo "<br>";
					echo "<br>";
				echo "<br>";*/
				
				$sql5 = mysqli_query($database,"SELECT teamnum FROM AnnArborPit WHERE scouter='$user_username' and drivetype IS NOT NULL");
				$pitAnnArbor=mysqli_num_rows($sql5);
				$totalpitAnnArbor = ($pitAnnArbor*15);
				/*echo "AnnArborPit ";
					echo $pitAnnArbor;
					echo "<br>";
					echo "Total Time Pit AnnArbor ";
					echo $totalpitAnnArbor;
				echo "<br>";*/
				
				$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.HowellPit WHERE scouter='$user_username' and disregard IS NOT NULL");
				$scouterHowell=mysqli_num_rows($sql6);
				$totalscouter1Howell = ($scouterHowell*7.5);
				/*echo "PitScouterHowell ";
					echo $scouterHowell;
					echo "<br>";
					echo "Total Time Pit Howell ";
					echo $totalscouter1Howell;
				echo "<br>";*/
				
				$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.HowellPit WHERE scouter2='$user_username' and disregard IS NOT NULL");
				$scouter2Howell=mysqli_num_rows($sql7);
				$totalscouter2Howell = ($scouter2Howell*7.5);
				/*echo "PitScouter2Howell ";
					echo $scouter2Howell;
					echo "<br>";
					echo "Total Time Pit Howell2 ";
					echo $totalscouter2Howell;
				echo "<br>";*/
				
				
				$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='$user_username' and disregard IS NOT NULL");
				$scoutercurrent=mysqli_num_rows($sql6);
				$totalscoutercurrent = ($scoutercurrent*7.5);
				/*echo "Active ";
					echo $scoutercurrent;
					echo "<br>";
					echo "Total Time Pit Active ";
					echo $totalscoutercurrent;
				echo "<br>";*/
				
				
				$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='$user_username' and disregard IS NOT NULL");
				$scouter2current2=mysqli_num_rows($sql7);
				$totalscouter2current = ($scouter2current2*7.5);
				/*echo "Active2 ";
					echo $scouter2current2;
					echo "<br>";
					echo "Total Time Pit Active2 ";
					echo $totalscouter2current;
				echo "<br>";*/
				
				
				$totalpitcurrent = ($totalscoutercurrent+$totalscouter2current);
				
				$totalpitHowell = ($totalscouter1Howell + $totalscouter2Howell);
				
				$totalpittime = ($totalpitAnnArbor + $totalpitHowell + $totalpitcurrent)/60;
				/*echo "TOTALPIT: ";
				echo $totalpittime;*/
				//Final Pit total^^^^^
				$totaltimescouted = $totalmatchtime + $totalpittime;
			mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='$user_username'")?>
			
			
			
			<h4>Time Scouted: <?php echo $totaltimescouted; ?> Hours</h4>
			
			<?php
				$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='$user_username'");
				$number=mysqli_num_rows($sql);
				
				$sql2 = mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='$user_username'");
				$number2=mysqli_num_rows($sql2);
				
				$sql3= mysqli_query($database,"SELECT matchnum FROM States WHERE ScouterName='$user_username'");
				$number3=mysqli_num_rows($sql3);
				
				$sql4 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='$user_username'");
				$number4=mysqli_num_rows($sql4);
				
				$totalmatchscouted = ($number + $number2 + $number3 + $number4);
			mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchscouted' WHERE user_username='$user_username'")?>
			
			<h4>Matches Scouted: <?php echo $totalmatchscouted;?></h4>
			
			<?php
				//get results from database
				$sql4 = mysqli_query($database,"SELECT teamnum FROM AnnArborPit WHERE ScouterName='$user_username'");
				$number4=mysqli_num_rows($sql4);
				
				$sql6 = mysqli_query($database,"SELECT teamnum FROM HowellPit WHERE Inputter='$user_username'");
				$number6=mysqli_num_rows($sql6);
				
				$totalpitentries = ($number4 + $number6);
			mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='$user_username'")?>
			<!--<h4>Pit Scout Entries: <?php echo $totalpitentries;?></h4>-->
			
			
			<?php
				//get results from database
				$sql = mysqli_query($database,"SELECT teamnum FROM AnnArborPit WHERE scouter='$user_username' and drivetype IS NOT NULL");
				$number=mysqli_num_rows($sql);
				
				$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='$user_username' and disregard IS NOT NULL");
				$number2=mysqli_num_rows($sql2);
				
				$sql10 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='$user_username' and disregard IS NOT NULL");
				$number3=mysqli_num_rows($sql10);
				
				$sql7 = mysqli_query($database,"SELECT teamnum FROM HowellPit WHERE scouter='$user_username' and disregard IS NOT NULL");
				$number7=mysqli_num_rows($sql7);
				
				$sql8 = mysqli_query($database,"SELECT teamnum FROM HowellPit WHERE scouter2='$user_username' and disregard IS NOT NULL");
				$number8=mysqli_num_rows($sql8);
				
				$totalpitscouts = ($number + $number2 + $number3 + $number7 + $number8);
			mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='$user_username'")?>
			
			<h4>Pit Scouts: <?php  echo $totalpitscouts; /*echo "<br>"; echo "TOTAL PIT SCOUT TIME: "; echo $totalpittime;*/?></h4>
				
				
				<div class="panel-group white" id="panel-profile">
					<div class="panel panel-default">
						<div id="panel-element-info" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="col-md-8 column">
									<p class="text-center profile-title"><i class="fa fa-info"></i> Basic</p>
									<hr>
									<?php
										if ($rws['user_shortbio']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-info"></i> Bio</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_shortbio'];?></p>
										</div>
									<?php } ?>
									<?php if ($current_user == "admin" or $current_user =="root") {?> 
										<?php
											if ($rws['user_phone']){
											?>   
											<div class="col-md-4">
												<p class="profile-details"><i class="fa fa-info"></i> Phone</p>
											</div>
											<div class="col-md-8">
												<p><?php echo $rws['user_phone'];?></p>
											</div>
										<?php } ?>
									<?php }?>
									<?php
										if ($rws['user_email']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-envelope"></i> Email</p>
										</div>
										<div class="col-md-8">                                    
											<p><?php echo $rws['user_email'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_country']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-info"></i> Country</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_country'];?></p>
										</div>
									<?php } ?>
								</div>
								<div class="col-md-4 column">
									<p class="text-center profile-title"><i class="fa fa-info"></i> Personal</p>
									<hr>
									<?php
										if ($rws['user_gender']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-user"></i> Gender</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_gender'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_dob']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-calendar"></i> Date of Birth</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_dob'];?></p>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- </div> -->
		</div>
	</div>																																																																		