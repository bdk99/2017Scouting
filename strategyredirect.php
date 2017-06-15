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
<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
<?php include '/var/www/_database/database.php' ?>   
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
<body>
	<center>
		<h1 class="rainbowize">Strategy</h1>		
		<br>
		<h2>Main</h2>		
		<button id="all" class="float-left submit-button" >All Data</button>
		<script type="text/javascript">
			document.getElementById("all").onclick = function () {
				location.href = "test.php";
			};
		</script>
		
		<button id="teamNum" class="float-left submit-button" >Data By Team Number</button>
		<script type="text/javascript">
			document.getElementById("teamNum").onclick = function () {
				location.href = "strategyinput.php";
			};
		</script>
		
		<button id="recall" class="float-left submit-button" >Match Recall</button>
		
		<script type="text/javascript">
			document.getElementById("recall").onclick = function () {
				location.href = "matchrecallinput.php";
			};
		</script>
		
		<button id="averages" class="float-left submit-button" >Averages</button>
		
		<script type="text/javascript">
			document.getElementById("averages").onclick = function () {
				location.href = "averages.php";
			};
		</script>
				<br>
		<br>
		<br>
		<br>
		<h2>Pit</h2>
		<button id="pitdata" class="float-left submit-button" >Pit Summary</button>
		
		<script type="text/javascript">
			document.getElementById("pitdata").onclick = function () {
				location.href = "pitdata.php";
			};
		</script>
		
		<br>
		<br>
		<br>
		<br>
		<h2>Export</h2>
		<button id="export" class="float-left submit-button" >Export</button>
		
		<script type="text/javascript">
			document.getElementById("export").onclick = function () {
				location.href = "export.php";
			};
		</script>
		
		
		<button id="hopperexport" class="float-left submit-button" >HOPPER SIZE</button>
		
		<script type="text/javascript">
			document.getElementById("hopperexport").onclick = function () {
				location.href = "hopperexport.php";
			};
		</script>
		<!--<button id="timescouted" class="float-left submit-button" >Time Scouted</button>
		
		<script type="text/javascript">
			document.getElementById("timescouted").onclick = function () {
				location.href = "timescouted.php";
			};
		</script>-->
		<br>
		<br>
		<br>
		<br>
		<br>
		
		
		<a href="MemeMachine.ods" download><h4>Match Prediction Sheet</h4></a>
	</center>
</body>		