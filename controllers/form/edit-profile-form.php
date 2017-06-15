<form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
		<li class="active"><a href="#general" data-toggle="tab">General</a></li>
		<li><a href="#personal" data-toggle="tab">Personal</a></li>
	</ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="general">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">First Name</label>*
                    <input type="text" class="form-control" minLength="3" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
				</div>
                <div class="form-group float-label-control">  
                    <label for="">Last Name</label>*
                    <input type="text" class="form-control" minLength="3" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
				</div>
                <div class="form-group float-label-control">
					<h5> If you would like a special Avatar please give an Administrator the file and they will upload it for you</h5>
					
                    <!--<label for="">Avatar</label>-->
					
                    <!--<input name="ImageFile" type="file" id="uploadFile"/>-->
                    <div class="col-md-6">
                        <div class="shortpreview">
                            <label for="">Avatar </label>
                            <br> 
                            <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive">
						</div>
					</div>
                    <!--<div class="col-md-6">
                        <div class="shortpreview" id="uploadImagePreview">
                            <label for="">Current Uploaded Avatar </label>
                            <br> 
                            <div id="imagePreview"></div>
						</div>
					</div>-->
				</div>
			</div>  
            <div class="col-md-6">
                <label for="">Username</label>*
                <div class="form-group float-label-control">
					<div class="input-group">
						<fieldset disabled> 
							<input type="text" class="form-control" placeholder="<?php echo $rws['user_username'];?>" name="user_username" value="<?php echo $rws['user_username'];?>" id="disabledTextInput" autocomplete="off">
						</fieldset>  
						<span class="input-group-addon">@TheFlyingToasters.org<?php echo $rws['domain_websiteaddress'];?></span>
					</div>
				</a>
			</div>
			<div class="form-group float-label-control">
				<label for="">Password</label>*
				<input type="password" class="form-control" placeholder="<?php echo $rws['user_password'];?>" name="user_password" value="<?php echo $rws['user_password'];?>" required>
			</div>
			<div class="form-group float-label-control">
				<label for="">Email</label>*
				<input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>" required>
			</div>  
		</div>
	</div>
	<div class="tab-pane fade" id="personal">
		<div class="col-md-6">
			<div class="form-group float-label-control">
				<label for="">Short Bio</label>
				<textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="10" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
			</div>
			<div class="form-group float-label-control">
				<label for="">Birthday</label>
				<input type="date" class="form-control" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>">      
			</div>
			<div class="form-group float-label-control">
				<label for="">Profession</label>
				<input type="text" class="form-control" placeholder="<?php echo $rws['user_profession'];?>" name="user_profession" value="<?php echo $rws['user_profession'];?>" id="profession">    
			</div>  
			<label for="">Gender</label>              
			<div class="form-group float-label-control">
				<div class="radio-inline">
					<label>
					<input type="radio" name="user_gender" id="optionsRadios1" value="Male" checked>Male</label>
				</div>              
				<div class="radio-inline">
					<label>
					<input type="radio" name="user_gender" id="optionsRadios1" value="Female">Female</label>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group float-label-control">
			<div class="input-group">
			<label for="">Phone Number</label>
			<br>
			<span class="input-group-addon">+1</span>
			<fieldset>
				<input type="number" min="0" class="form-control" maxLength="13" placeholder="<?php echo $rws['user_phone'];?>" name="user_phone" value="<?php echo $rws['user_phone'];?>">    
				</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>     
<br>
<div class="submit">
	<center>
	<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
	</center>
    </div>
	</form>	