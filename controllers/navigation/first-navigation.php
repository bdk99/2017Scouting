<?php
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username='$current_user'";
    $result = mysqli_query($database,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
	?>
    <!-- Navbar1 -->
	<div id="navigation" class="navbar navbar-default navbar-fixed-top">
		<div class="fluid-container">
	        <div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	        
			</div>
	        <div class="navbar-collapse collapse" id="navbar-collapse1">
				
				<ul class="nav navbar-nav">
					<li>
						<a href="home.php"><i class="fa fa-home"></i> Main</a>
					</li>
					<li>
						<a href="pitscouting.php"> Pit</a>
					</li>
					<li>
						<a href="videoscouting.php">Video</a>
					</li>
				</ul>
                <form class="navbar-form navbar-left" role="search" method="post" autocomplete="off" action="search-result.php">
                    <div class="form-group">
                        <input type="text" class="search form-control" id="searchbox" placeholder="Search for People" name="search-form"/><br />
                        <div id="display"></div>
						</div>
				</form>
				<ul class="nav navbar-nav">
					<li>
						<a href="all-users.php"> All Users</a>
					</li>
				</ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['user_firstname'];?> <?php echo $row['user_lastname'];?><strong class="caret"></strong></a>                  
                        <ul class="dropdown-menu">
                            <li>
								<a href="my-profile.php"><i class="fa fa-home"></i> My Profile</a>
                                <a href="edit-profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
							</li>
						</ul>
					</li>	
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars" style="font-size: 1.27em;"></i>
						</a>
                        <ul class="dropdown-menu">
						<?php	if ($current_user == "admin" or $current_user =="ItalianoBaffi" or $current_user =="strategy" or $current_user =="root") {?>

                            <li>
                                <a href="maintenance.php"> Administration</a>
							</li> 
							<li>
                                <a href="strategyredirect.php"> Strategy</a>
							</li>
							<?php }?>
							<?php	if ($current_user == "admin" or $current_user =="ItalianoBaffi" or $current_user =="Shiffy" or $current_user =="root") {?>

                            <li>
                                <a href="/Chat2/index.php"> Chat</a>
							</li> 
						<?php }?>
							<li>
                                <a href="components/logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
							</li>
						</ul>
					</li>
				</ul>    
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- ./Navbar1 -->
	
	<?php
	} 
?>