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


<?php include '/var/www/_database/database.php' ?>   
<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
<script>
	
	
	$(document).bind("contextmenu",function(e) {
		e.preventDefault();
	});
	$(document).keydown(function(e){
		if(e.which === 123){
			return false;
		}
	});
	$(document).keydown(function(event){
		if(event.keyCode==123){
			return false;//Prevent from F12
		}
		else if(event.ctrlKey && event.shiftKey && event.keyCode==73){ 
			return false; //Prevent from ctrl+shift+i
		}
	});
</script>

<?php
	
	if ($current_user == "admin" or $current_user =="ItalianoBaffi" or $current_user =="root")
	{?>
	<br>
	<center><h1>ADMINISTRATION</h1></center>
	<br>
	<br>
	<center>
		<h4>View all users</h4>
		<button id="users" class="float-left submit-button" >Users</button>
		
		<script type="text/javascript">
			document.getElementById("users").onclick = function () {
				location.href = "users.php";
			};
		</script>
	</center>
	
	<center>
		
		
		<br>
		<br>
		<h4>Reviews</h4>
		<button id="reviews" class="float-left submit-button" >Reviews</button>
		
		<script type="text/javascript">
			document.getElementById("reviews").onclick = function () {
				location.href = "reviews.php";
			};
		</script>
		<br>
		<br>
		<br>
		<h4> BEWARE! CLICKING THIS BUTTON WILL DELETE THE CONTENTS OF THE DATABASE! ONLY DO THIS WITH ADMINISTRATOR APPROVAL!</h4>
		<button id="trunicate" onclick="getConfirmatio();" class="float-left submit-button" >Destroy Database Contents</button>
		
		<script type="text/javascript">
			function getConfirmatio(){
				var retVal = confirm("CAUTION!  You are about to remove all contents of the database, are you sure... ?");
				if( retVal == true ){
					location.href = "trunicate.php";
					return true;
				}
				else{
					return false;
				}
			}
			//-->
		</script>
		<br>
		<br>
		<br>
		<br>
		<button id="todo" class="float-left submit-button" >Developers ToDo</button>
		<script type="text/javascript">
			document.getElementById("todo").onclick = function () {
				location.href = "todo.php";
			};
		</script>
		<br>
		<br>
		<br>
		<br>
		<button id="removeblanks" class="float-left submit-button" >Remove Blanks</button>
		<script type="text/javascript">
			document.getElementById("removeblanks").onclick = function () {
				location.href = "removeblanks.php";
			};
		</script>
	</center>
	
	<?php	
	}
	
	else
	{
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<center>";
		echo "<h1>YOU ARE NOT PERMITTED TO ACCESS THIS PAGE!</h1>";
		echo "</center>";
	} ?>																			