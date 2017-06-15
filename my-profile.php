<?php include 'components/authentication.php' ?> 
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?> 
<?php include 'controllers/base/style.php' ?>
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
				<br>
				<?php if ($current_user == "ShashankR")
					{?>
					<audio autoplay>
						<source src="RickRoll.mp3" type="audio/mpeg">
					</audio>
				<?php }?>
				<div class="btn-group">
					<a href="http://www.facebook.com/sharer.php?u=<?php echo $url ?> &t=<?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?> " alt="Share this profile on Facebook" title="Share on Facebook" target="_blank" ><button type="button" class="btn btn-default"><i class="fa fa-facebook"></i></button></a>
					<a href="http://twitter.com/share?text=<?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?>&url=<?php echo $url ?>" alt="Tweet This Post" title="Tweet about the profile" target="_blank"><button type="button" class="btn btn-default"><i class="fa fa-twitter"></i></button></a>
					<a href="https://plusone.google.com/_/+1/confirm?hl=en-US&url=<?php echo $url ?>" alt="Share this profile on Google+" title="Share on Google+" target="_blank" ><button type="button" class="btn btn-default"><i class="fa fa-google-plus"></i></button></a>
				</div>
			</center>
			<h1 class="text-center profile-text profile-name"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
			<h6 class="text-center profile-text profile-name">(AKA:  <?php echo $rws['user_username'];?>)</h6>
			<h2 class="text-center profile-text profile-profession"><?php echo $rws['user_profession'];?></h2>
			
			<center><?php
				//get results from database
				$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='$current_user'");
				$AnnArbor=mysqli_num_rows($sql40);
				$totaltimeannarbor=(($AnnArbor *9)/60);
				/*echo "AnnArbor ";
					echo $AnnArbor;
					echo "<br>";
					echo "Total Time AnnArbor ";
					echo $totaltimeannarbor;
				echo "<br>";*/
				
				$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='$current_user'");
				$Howell=mysqli_num_rows($sql50);
				$totaltimehowell=(($Howell *9)/60);
				/*echo "Howell ";
					echo $Howell;
					echo "<br>";
					echo "Total Time Howell ";
					echo $totaltimehowell;
				echo "<br>";*/
				
				$sql60= mysqli_query($database,"SELECT matchnum FROM States WHERE ScouterName='$current_user'");
				$states=mysqli_num_rows($sql60);
				$totaltimestates=(($states *9)/60);
				/*echo "States ";
					echo $states;
					echo "<br>";
					echo "Total Time States ";
					echo $totaltimestates;
				echo "<br>";*/
				
				$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='$current_user'");
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
				
				$sql5 = mysqli_query($database,"SELECT teamnum FROM AnnArborPit WHERE scouter='$current_user' and drivetype IS NOT NULL");
				$pitAnnArbor=mysqli_num_rows($sql5);
				$totalpitAnnArbor = ($pitAnnArbor*15);
				/*echo "AnnArborPit ";
					echo $pitAnnArbor;
					echo "<br>";
					echo "Total Time Pit AnnArbor ";
					echo $totalpitAnnArbor;
				echo "<br>";*/
				
				$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.HowellPit WHERE scouter='$current_user' and disregard IS NOT NULL");
				$scouterHowell=mysqli_num_rows($sql6);
				$totalscouter1Howell = ($scouterHowell*7.5);
				/*echo "PitScouterHowell ";
					echo $scouterHowell;
					echo "<br>";
					echo "Total Time Pit Howell ";
					echo $totalscouter1Howell;
				echo "<br>";*/
				
				$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.HowellPit WHERE scouter2='$current_user' and disregard IS NOT NULL");
				$scouter2Howell=mysqli_num_rows($sql7);
				$totalscouter2Howell = ($scouter2Howell*7.5);
				/*echo "PitScouter2Howell ";
					echo $scouter2Howell;
					echo "<br>";
					echo "Total Time Pit Howell2 ";
					echo $totalscouter2Howell;
				echo "<br>";*/
				
				
				$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='$current_user' and disregard IS NOT NULL");
				$scoutercurrent=mysqli_num_rows($sql6);
				$totalscoutercurrent = ($scoutercurrent*7.5);
				/*echo "Active ";
					echo $scoutercurrent;
					echo "<br>";
					echo "Total Time Pit Active ";
					echo $totalscoutercurrent;
				echo "<br>";*/
				
				
				$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='$current_user' and disregard IS NOT NULL");
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
			mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='$current_user'")?>
			
			
			
			<h4>Time Scouted: <?php echo $totaltimescouted; ?> Hours</h4>
			
			<?php
				$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='$current_user'");
				$number=mysqli_num_rows($sql);
				
				$sql2 = mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='$current_user'");
				$number2=mysqli_num_rows($sql2);
				
				$sql3= mysqli_query($database,"SELECT matchnum FROM States WHERE ScouterName='$current_user'");
				$number3=mysqli_num_rows($sql3);
				
				$sql4 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='$current_user'");
				$number4=mysqli_num_rows($sql4);
				
				$totalmatchscouted = ($number + $number2 + $number3 + $number4);
			mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchscouted' WHERE user_username='$current_user'")?>
			
			<h4>Matches Scouted: <?php echo $totalmatchscouted;?></h4>
			
			<?php
				//get results from database
				$sql4 = mysqli_query($database,"SELECT teamnum FROM AnnArborPit WHERE ScouterName='$current_user'");
				$number4=mysqli_num_rows($sql4);
				
				$sql6 = mysqli_query($database,"SELECT teamnum FROM HowellPit WHERE Inputter='$current_user'");
				$number6=mysqli_num_rows($sql6);
				
				$totalpitentries = ($number4 + $number6);
			mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='$current_user'")?>
			<!--<h4>Pit Scout Entries: <?php echo $totalpitentries;?></h4>-->
			
			
			<?php
				//get results from database
				$sql = mysqli_query($database,"SELECT teamnum FROM AnnArborPit WHERE scouter='$current_user' and drivetype IS NOT NULL");
				$number=mysqli_num_rows($sql);
				
				$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='$current_user' and disregard IS NOT NULL");
				$number2=mysqli_num_rows($sql2);
				
				$sql10 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='$current_user' and disregard IS NOT NULL");
				$number3=mysqli_num_rows($sql10);
				
				$sql7 = mysqli_query($database,"SELECT teamnum FROM HowellPit WHERE scouter='$current_user' and disregard IS NOT NULL");
				$number7=mysqli_num_rows($sql7);
				
				$sql8 = mysqli_query($database,"SELECT teamnum FROM HowellPit WHERE scouter2='$current_user' and disregard IS NOT NULL");
				$number8=mysqli_num_rows($sql8);
				
				$totalpitscouts = ($number + $number2 + $number3 + $number7 + $number8);
			mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='$current_user'")?>
			
			<h4>Pit Scouts: <?php  echo $totalpitscouts; /*echo "<br>"; echo "TOTAL PIT SCOUT TIME: "; echo $totalpittime;*/?></h4>
				
				
				<div class="panel-group white" id="panel-profile">
					<div class="panel panel-default white">
						<div class="panel-heading white">
							<center>
								<a class="panel-title" data-toggle="collapse" data-parent="#panel-profile" href="#panel-element-info">Details</a>
							</center>
						</div>
						<div id="panel-element-info" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="col-md-4 column">
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
								<div class="col-md-4 column">
									<p class="text-center profile-title"><i class="fa fa-info"></i> Social</p>
									<hr>
									<?php
										if ($rws['user_facebook']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-facebook"></i> Facebook</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_facebook'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_twitter']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-twitter"></i> Twitter</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_twitter'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_linkedin']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-linkedin"></i> LinkedIn</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_linkedin'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_pinterest']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-pinterest"></i> Pinterest</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_pinterest'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_googleplus']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-google-plus"></i> Google Plus</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_googleplus'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_stumbleupon']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-stumbleupon"></i> Stumble Upon</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_stumbleupon'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_github']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-github"></i> Github</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_github'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_vimeo']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-vimeo-square"></i> Vimeo</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_vimeo'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_youtube']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-youtube"></i> Youtube</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_youtube'];?></p>
										</div>
									<?php } ?>
									<?php
										if ($rws['user_skype']){
										?>   
										<div class="col-md-4">
											<p class="profile-details"><i class="fa fa-skype"></i> Skype</p>
										</div>
										<div class="col-md-8">
											<p><?php echo $rws['user_skype'];?></p>
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