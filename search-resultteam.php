<?php include 'components/authentication.php' ?>   
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?> 
<?php
    if($_POST){
        $query=$_POST['TeamNum'];
        $sql=mysqli_query($database,"select * from mytable where teamnum like '%$query%'");
        $number=mysqli_num_rows($sql) -1;
	}
?>

<div id="content">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default" style="margin: 20px 0px;">
				<div class="panel-heading">                                 
					<?php 
						if($number > 1){ 
						?>
						<h3 class="panel-title"><?php echo $number; ?> Results for "<?php echo $query; ?>"</h3>
						<?php     
						}
						else{
						?>
						<h3 class="panel-title"><?php echo $number; ?> Result for "<?php echo $query; ?>"</h3>                                 
						<?php     
						}
					?>
					
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="container">
							<div class="row clearfix">
								<div class="col-md-12 column">
									<div class="row clearfix">
										<?php
											if($_POST){
												$query=$_POST['TeamNum'];
												$sql=mysqli_query($database,"select * from mytable where teamnum like '%$query%'");
												if( mysqli_num_rows($sql) > 0) {
													while($rws = mysqli_fetch_array($sql)){
													?>
													<div class="panel-group" id="panel-<?php echo $rws['id']; ?>">
														<div class="panel panel-default">
															<div class="panel-heading">
																<a class="panel-title" data-toggle="collapse" href="#panel-element-<?php echo $rws['id']; ?>"><?php echo $rws['teamnum'];?><button type="button" class="close" data-dismiss="panel"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
															</div>
															<div id="panel-element-<?php echo $rws['id']; ?>" class="panel-collapse collapse in">
																<div class="panel-body">
																	<div class="col-md-6 column">
																		<div class="col-md-12 column">
																			<h2><span><?php echo $rws['teamnum'];?> </span></h2>
																			<hr>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<?php 
													} 
												}
												else{
												?>
												<center>
													<h1>No Results to show</h1>
												</center>
												<?php      
												}
											}                                                              
										?>                                                                
									</div>
								</div>
							</div>
						</div>                                        
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>