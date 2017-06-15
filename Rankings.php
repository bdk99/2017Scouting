<?php include 'components/authentication.php' ?>     
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>   
<div class="container">
	<center>
	<!--<h4>Update Match Rankings</h4>
		<button id="update" onclick="getConfirmatio();" class="float-left submit-button" >Update</button>
		
		<script type="text/javascript">
			function getConfirmatio(){
				var retVal = confirm("Update Match Rankings?");
				if( retVal == true ){
					location.href = "update.php";
					return true;
				}
				else{
					return false;
				}
			}
		</script>-->
		</center>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<?php
					include '_database/database.php';
					session_start();
					$current_user = $_SESSION['user_username'];
					$sql = "SELECT * FROM 2017_game.user ORDER BY user_rankings asc";
					$result = mysqli_query($database,$sql) or die(mysqli_error($database));
					while($rws = mysqli_fetch_array($result)){ 
					?>
					<div class="col-md-4 column">
						<div class="panel-group" id="panel-<?php echo $rws['user_id']; ?>">
							<div class="panel panel-default">
								<div id="panel-element-<?php echo $rws['user_id']; ?>" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="col-md-6 column">
											<img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" name="aboutme" class="img-responsive">                                  
										</div>
										<div class="col-md-6 column">
											<h2><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></a></span></h2>
											<h4><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_rankings'];?> Ranking</a></span></h4>
											<h4><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_position'];?></a></span></h4>

											<?php if($current_user == "admin")
												{?>
											<!--<h4><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_timescouted'];?> Hours</a></span></h4>
											<h4><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_pitscouts'];?> Pit Scouts</a></span></h4>-->

											<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>                                                         
</div>
</div>
</div>
</div>												