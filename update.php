<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='admin'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='admin'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='admin'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='admin' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='admin' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='admin' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='admin'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='admin'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='admin'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='admin'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='admin'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='admin'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='admin'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='admin'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='admin' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='admin' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='admin' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='admin'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='admin'");?>






<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AlenaC'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='AlenaC'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AlenaC'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AlenaC' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='AlenaC' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='AlenaC' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='AlenaC'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AlenaC'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AlenaC'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AlenaC'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='AlenaC'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='AlenaC'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='AlenaC'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='AlenaC'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AlenaC' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='AlenaC' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='AlenaC' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='AlenaC'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='AlenaC'");?>








<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='alexf'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='alexf'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='alexf'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='alexf' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='alexf' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='alexf' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='alexf'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='alexf'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='alexf'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='alexf'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='alexf'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='alexf'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='alexf'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='alexf'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='alexf' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='alexf' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='alexf' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='alexf'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='alexf'");?>















<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AlexM'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='AlexM'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AlexM'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AlexM' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='AlexM' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='AlexM' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='AlexM'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AlexM'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AlexM'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AlexM'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='AlexM'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='AlexM'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='AlexM'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='AlexM'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AlexM' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='AlexM' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='AlexM' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='AlexM'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='AlexM'");?>










<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AllenK'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='AllenK'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AllenK'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AllenK' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='AllenK' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='AllenK' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='AllenK'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AllenK'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AllenK'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AllenK'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='AllenK'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='AllenK'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='AllenK'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='AllenK'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AllenK' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='AllenK' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='AllenK' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='AllenK'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='AllenK'");?>












<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AllanK'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='AllanK'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AllanK'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AllanK' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='AllanK' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='AllanK' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='AllanK'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AllanK'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AllanK'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AllanK'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='AllanK'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='AllanK'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='AllanK'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='AllanK'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AllanK' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='AllanK' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='AllanK' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='AllanK'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='AllanK'");?>












<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AndrewO'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='AndrewO'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AndrewO'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AndrewO' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='AndrewO' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='AndrewO' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='AndrewO'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AndrewO'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AndrewO'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AndrewO'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='AndrewO'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='AndrewO'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='AndrewO'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='AndrewO'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AndrewO' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='AndrewO' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='AndrewO' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='AndrewO'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='AndrewO'");?>













<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AngeliaB'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='AngeliaB'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AngeliaB'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AngeliaB' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='AngeliaB' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='AngeliaB' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='AngeliaB'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AngeliaB'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AngeliaB'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AngeliaB'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='AngeliaB'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='AngeliaB'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='AngeliaB'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='AngeliaB'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AngeliaB' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='AngeliaB' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='AngeliaB' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='AngeliaB'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='AngeliaB'");?>







<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AnnaM'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='AnnaM'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AnnaM'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AnnaM' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='AnnaM' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='AnnaM' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='AnnaM'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='AnnaM'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AnnaM'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='AnnaM'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='AnnaM'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='AnnaM'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='AnnaM'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='AnnaM'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='AnnaM' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='AnnaM' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='AnnaM' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='AnnaM'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='AnnaM'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='BaylieB'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='BaylieB'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BaylieB'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='BaylieB' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='BaylieB' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='BaylieB' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='BaylieB'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='BaylieB'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BaylieB'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BaylieB'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='BaylieB'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='BaylieB'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='BaylieB'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='BaylieB'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='BaylieB' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='BaylieB' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='BaylieB' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='BaylieB'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='BaylieB'");?>






<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='BradenH'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='BradenH'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BradenH'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='BradenH' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='BradenH' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='BradenH' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='BradenH'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='BradenH'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BradenH'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BradenH'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='BradenH'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='BradenH'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='BradenH'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='BradenH'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='BradenH' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='BradenH' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='BradenH' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='BradenH'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='BradenH'");?>




<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Brandon_L'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='Brandon_L'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Brandon_L'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Brandon_L' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='Brandon_L' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='Brandon_L' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='Brandon_L'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Brandon_L'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Brandon_L'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Brandon_L'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='Brandon_L'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='Brandon_L'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='Brandon_L'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='Brandon_L'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Brandon_L' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='Brandon_L' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='Brandon_L' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='Brandon_L'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='Brandon_L'");?>



<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='BrodyC'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='BrodyC'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BrodyC'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='BrodyC' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='BrodyC' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='BrodyC' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='BrodyC'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='BrodyC'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BrodyC'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='BrodyC'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='BrodyC'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='BrodyC'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='BrodyC'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='BrodyC'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='BrodyC' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='BrodyC' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='BrodyC' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='BrodyC'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='BrodyC'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Cade_G'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='Cade_G'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Cade_G'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Cade_G' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='Cade_G' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='Cade_G' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='Cade_G'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Cade_G'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Cade_G'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Cade_G'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='Cade_G'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='Cade_G'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='Cade_G'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='Cade_G'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Cade_G' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='Cade_G' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='Cade_G' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='Cade_G'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='Cade_G'");?>





<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='CadeM'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='CadeM'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='CadeM'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='CadeM' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='CadeM' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='CadeM' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='CadeM'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='CadeM'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='CadeM'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='CadeM'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='CadeM'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='CadeM'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='CadeM'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='CadeM'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='CadeM' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='CadeM' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='CadeM' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='CadeM'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='CadeM'");?>










<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='CarlG'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='CarlG'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='CarlG'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='CarlG' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='CarlG' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='CarlG' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='CarlG'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='CarlG'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='CarlG'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='CarlG'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='CarlG'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='CarlG'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='CarlG'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='CarlG'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='CarlG' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='CarlG' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='CarlG' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='CarlG'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='CarlG'");?>


















<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='ColeS'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='ColeS'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ColeS'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='ColeS' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='ColeS' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='ColeS' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='ColeS'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='ColeS'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ColeS'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ColeS'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='ColeS'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='ColeS'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='ColeS'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='ColeS'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='ColeS' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='ColeS' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='ColeS' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='ColeS'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='ColeS'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='DevonP317'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='DevonP317'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='DevonP317'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='DevonP317' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='DevonP317' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='DevonP317' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='DevonP317'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='DevonP317'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='DevonP317'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='DevonP317'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='DevonP317'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='DevonP317'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='DevonP317'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='DevonP317'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='DevonP317' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='DevonP317' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='DevonP317' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='DevonP317'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='DevonP317'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='EmmaB'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='EmmaB'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='EmmaB'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='EmmaB' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='EmmaB' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='EmmaB' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='EmmaB'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='EmmaB'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='EmmaB'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='EmmaB'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='EmmaB'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='EmmaB'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='EmmaB'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='EmmaB'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='EmmaB' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='EmmaB' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='EmmaB' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='EmmaB'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='EmmaB'");?>













<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='EmmaW'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='EmmaW'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='EmmaW'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='EmmaW' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='EmmaW' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='EmmaW' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='EmmaW'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='EmmaW'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='EmmaW'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='EmmaW'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='EmmaW'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='EmmaW'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='EmmaW'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='EmmaW'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='EmmaW' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='EmmaW' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='EmmaW' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='EmmaW'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='EmmaW'");?>












<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Garrett'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='Garrett'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Garrett'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Garrett' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='Garrett' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='Garrett' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='Garrett'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Garrett'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Garrett'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Garrett'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='Garrett'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='Garrett'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='Garrett'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='Garrett'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Garrett' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='Garrett' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='Garrett' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='Garrett'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='Garrett'");?>








<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='GretchenA'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='GretchenA'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='GretchenA'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='GretchenA' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='GretchenA' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='GretchenA' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='GretchenA'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='GretchenA'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='GretchenA'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='GretchenA'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='GretchenA'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='GretchenA'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='GretchenA'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='GretchenA'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='GretchenA' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='GretchenA' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='GretchenA' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='GretchenA'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='GretchenA'");?>








<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='hitheshy'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='hitheshy'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='hitheshy'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='hitheshy' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='hitheshy' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='hitheshy' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='hitheshy'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='hitheshy'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='hitheshy'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='hitheshy'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='hitheshy'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='hitheshy'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='hitheshy'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='hitheshy'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='hitheshy' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='hitheshy' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='hitheshy' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='hitheshy'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='hitheshy'");?>










<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='ItalianoBaffi'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='ItalianoBaffi'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ItalianoBaffi'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='ItalianoBaffi' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='ItalianoBaffi' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='ItalianoBaffi' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='ItalianoBaffi'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='ItalianoBaffi'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ItalianoBaffi'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ItalianoBaffi'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='ItalianoBaffi'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='ItalianoBaffi'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='ItalianoBaffi'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='ItalianoBaffi'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='ItalianoBaffi' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='ItalianoBaffi' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='ItalianoBaffi' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='ItalianoBaffi'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='ItalianoBaffi'");?>





<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JackL'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='JackL'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JackL'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JackL' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='JackL' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='JackL' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='JackL'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JackL'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JackL'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JackL'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='JackL'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='JackL'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='JackL'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='JackL'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JackL' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='JackL' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='JackL' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='JackL'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='JackL'");?>








<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JaredK'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='JaredK'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JaredK'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JaredK' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='JaredK' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='JaredK' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='JaredK'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JaredK'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JaredK'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JaredK'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='JaredK'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='JaredK'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='JaredK'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='JaredK'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JaredK' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='JaredK' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='JaredK' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='JaredK'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='JaredK'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JenniferA'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='JenniferA'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JenniferA'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JenniferA' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='JenniferA' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='JenniferA' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='JenniferA'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JenniferA'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JenniferA'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JenniferA'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='JenniferA'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='JenniferA'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='JenniferA'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='JenniferA'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JenniferA' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='JenniferA' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='JenniferA' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='JenniferA'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='JenniferA'");?>








<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JosephGembacz'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='JosephGembacz'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JosephGembacz'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JosephGembacz' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='JosephGembacz' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='JosephGembacz' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='JosephGembacz'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JosephGembacz'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JosephGembacz'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JosephGembacz'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='JosephGembacz'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='JosephGembacz'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='JosephGembacz'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='JosephGembacz'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JosephGembacz' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='JosephGembacz' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='JosephGembacz' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='JosephGembacz'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='JosephGembacz'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Josh'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='Josh'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Josh'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Josh' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='Josh' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='Josh' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='Josh'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Josh'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Josh'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Josh'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='Josh'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='Josh'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='Josh'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='Josh'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Josh' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='Josh' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='Josh' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='Josh'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='Josh'");?>












<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JoshO'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='JoshO'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JoshO'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JoshO' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='JoshO' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='JoshO' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='JoshO'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='JoshO'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JoshO'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='JoshO'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='JoshO'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='JoshO'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='JoshO'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='JoshO'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='JoshO' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='JoshO' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='JoshO' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='JoshO'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='JoshO'");?>










<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='KeeganN'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='KeeganN'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='KeeganN'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='KeeganN' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='KeeganN' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='KeeganN' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='KeeganN'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='KeeganN'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='KeeganN'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='KeeganN'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='KeeganN'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='KeeganN'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='KeeganN'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='KeeganN'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='KeeganN' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='KeeganN' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='KeeganN' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='KeeganN'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='KeeganN'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='KyleR'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='KyleR'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='KyleR'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='KyleR' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='KyleR' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='KyleR' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='KyleR'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='KyleR'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='KyleR'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='KyleR'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='KyleR'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='KyleR'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='KyleR'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='KyleR'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='KyleR' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='KyleR' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='KyleR' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='KyleR'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='KyleR'");?>










<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='MadiB'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='MadiB'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MadiB'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='MadiB' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='MadiB' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='MadiB' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='MadiB'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='MadiB'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MadiB'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MadiB'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='MadiB'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='MadiB'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='MadiB'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='MadiB'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='MadiB' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='MadiB' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='MadiB' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='MadiB'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='MadiB'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='mark'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='mark'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='mark'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='mark' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='mark' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='mark' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='mark'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='mark'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='mark'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='mark'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='mark'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='mark'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='mark'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='mark'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='mark' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='mark' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='mark' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='mark'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='mark'");?>












<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='martinstokes'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='martinstokes'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='martinstokes'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='martinstokes' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='martinstokes' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='martinstokes' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='martinstokes'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='martinstokes'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='martinstokes'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='martinstokes'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='martinstokes'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='martinstokes'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='martinstokes'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='martinstokes'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='martinstokes' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='martinstokes' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='martinstokes' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='martinstokes'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='martinstokes'");?>







<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='MattB'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='MattB'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MattB'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='MattB' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='MattB' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='MattB' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='MattB'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='MattB'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MattB'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MattB'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='MattB'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='MattB'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='MattB'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='MattB'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='MattB' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='MattB' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='MattB' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='MattB'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='MattB'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='MattK'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='MattK'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MattK'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='MattK' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='MattK' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='MattK' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='MattK'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='MattK'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MattK'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MattK'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='MattK'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='MattK'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='MattK'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='MattK'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='MattK' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='MattK' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='MattK' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='MattK'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='MattK'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='MentorCarl'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='MentorCarl'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MentorCarl'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='MentorCarl' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='MentorCarl' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='MentorCarl' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='MentorCarl'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='MentorCarl'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MentorCarl'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='MentorCarl'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='MentorCarl'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='MentorCarl'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='MentorCarl'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='MentorCarl'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='MentorCarl' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='MentorCarl' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='MentorCarl' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='MentorCarl'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='MentorCarl'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='michael'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='michael'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='michael'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='michael' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='michael' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='michael' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='michael'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='michael'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='michael'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='michael'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='michael'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='michael'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='michael'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='michael'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='michael' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='michael' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='michael' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='michael'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='michael'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='nealp'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='nealp'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='nealp'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='nealp' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='nealp' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='nealp' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='nealp'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='nealp'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='nealp'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='nealp'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='nealp'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='nealp'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='nealp'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='nealp'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='nealp' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='nealp' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='nealp' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='nealp'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='nealp'");?>












<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='root'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='root'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='root'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='root' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='root' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='root' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='root'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='root'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='root'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='root'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='root'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='root'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='root'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='root'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='root' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='root' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='root' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='root'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='root'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='RyanB'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='RyanB'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='RyanB'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='RyanB' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='RyanB' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='RyanB' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='RyanB'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='RyanB'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='RyanB'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='RyanB'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='RyanB'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='RyanB'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='RyanB'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='RyanB'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='RyanB' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='RyanB' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='RyanB' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='RyanB'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='RyanB'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='SaiyamK'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='SaiyamK'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SaiyamK'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='SaiyamK' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='SaiyamK' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='SaiyamK' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='SaiyamK'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='SaiyamK'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SaiyamK'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SaiyamK'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='SaiyamK'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='SaiyamK'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='SaiyamK'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='SaiyamK'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='SaiyamK' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='SaiyamK' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='SaiyamK' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='SaiyamK'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='SaiyamK'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='SamuelS'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='SamuelS'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SamuelS'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='SamuelS' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='SamuelS' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='SamuelS' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='SamuelS'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='SamuelS'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SamuelS'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SamuelS'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='SamuelS'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='SamuelS'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='SamuelS'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='SamuelS'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='SamuelS' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='SamuelS' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='SamuelS' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='SamuelS'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='SamuelS'");?>









<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='ShashankR'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='ShashankR'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ShashankR'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='ShashankR' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='ShashankR' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='ShashankR' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='ShashankR'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='ShashankR'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ShashankR'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='ShashankR'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='ShashankR'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='ShashankR'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='ShashankR'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='ShashankR'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='ShashankR' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='ShashankR' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='ShashankR' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='ShashankR'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='ShashankR'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Shiffy'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='Shiffy'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Shiffy'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Shiffy' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='Shiffy' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='Shiffy' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='Shiffy'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Shiffy'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Shiffy'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Shiffy'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='Shiffy'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='Shiffy'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='Shiffy'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='Shiffy'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Shiffy' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='Shiffy' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='Shiffy' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='Shiffy'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='Shiffy'");?>

















<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='SniderR'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='SniderR'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SniderR'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='SniderR' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='SniderR' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='SniderR' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='SniderR'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='SniderR'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SniderR'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='SniderR'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='SniderR'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='SniderR'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='SniderR'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='SniderR'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='SniderR' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='SniderR' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='SniderR' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='SniderR'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='SniderR'");?>














<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='StephanieB'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='StephanieB'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='StephanieB'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='StephanieB' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='StephanieB' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='StephanieB' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='StephanieB'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='StephanieB'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='StephanieB'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='StephanieB'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='StephanieB'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='StephanieB'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='StephanieB'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='StephanieB'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='StephanieB' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='StephanieB' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='StephanieB' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='StephanieB'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='StephanieB'");?>

















<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='strategy'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='strategy'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='strategy'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='strategy' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='strategy' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='strategy' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='strategy'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='strategy'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='strategy'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='strategy'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='strategy'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='strategy'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='strategy'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='strategy'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='strategy' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='strategy' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='strategy' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='strategy'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='strategy'");?>



















<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='tanner_N'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='tanner_N'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='tanner_N'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='tanner_N' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='tanner_N' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='tanner_N' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='tanner_N'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='tanner_N'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='tanner_N'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='tanner_N'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='tanner_N'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='tanner_N'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='tanner_N'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='tanner_N'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='tanner_N' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='tanner_N' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='tanner_N' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='tanner_N'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='tanner_N'");?>

















<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='TaylorK'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='TaylorK'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='TaylorK'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='TaylorK' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='TaylorK' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='TaylorK' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='TaylorK'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='TaylorK'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='TaylorK'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='TaylorK'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='TaylorK'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='TaylorK'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='TaylorK'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='TaylorK'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='TaylorK' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='TaylorK' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='TaylorK' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='TaylorK'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='TaylorK'");?>























<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Tombro'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='Tombro'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Tombro'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Tombro' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='Tombro' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='Tombro' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='Tombro'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='Tombro'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Tombro'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='Tombro'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='Tombro'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='Tombro'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='Tombro'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='Tombro'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='Tombro' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='Tombro' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='Tombro' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='Tombro'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='Tombro'");?>












<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='willemdafo'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='willemdafo'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='willemdafo'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='willemdafo' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='willemdafo' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='willemdafo' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='willemdafo'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='willemdafo'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='willemdafo'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='willemdafo'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='willemdafo'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='willemdafo'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='willemdafo'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='willemdafo'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='willemdafo' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='willemdafo' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='willemdafo' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='willemdafo'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='willemdafo'");?>











<center><?php
	//get results from database
	$sql40 = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='WillR'");
	$AnnArbor=mysqli_num_rows($sql40);
	$totaltimeannarbor=(($AnnArbor *12)/60);
	
	$sql50= mysqli_query($database,"SELECT matchnum FROM Howell WHERE ScouterName='WillR'");
	$Howell=mysqli_num_rows($sql50);
	$totaltimehowell=(($Howell *6)/60);
	
	$sql30 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='WillR'");
	$states=mysqli_num_rows($sql30);
	$totaltimestates=(($states *6)/60);
	
	$totalmatchtime=($totaltimeannarbor+$totaltimehowell+$totaltimestates);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='WillR' and drivetype IS NOT NULL");
	$pitAnnArbor=mysqli_num_rows($sql5);
	$totalpitAnnArbor = (($pitAnnArbor*15)/60);
	
	$sql6 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter='WillR' and disregard IS NOT NULL");
	$scouter=mysqli_num_rows($sql6);
	$totalpitscouter = (($scouter*7.5)/60);
	
	$sql7 = mysqli_query($database,"SELECT teamnum FROM 2017_game.pit WHERE scouter2='WillR' and disregard IS NOT NULL");
	$scouter2=mysqli_num_rows($sql7);
	$totalpitscouter2 = (($scouter2*7.5)/60);
	
	$totalpittime = $totalpitAnnArbor + $totalpitscouter + $totalpitscouter2;
	
	$totaltimescouted = $totalmatchtime + $totalpittime;
mysqli_query($database,"UPDATE user SET user_timescouted='$totaltimescouted' WHERE user_username='WillR'")?>


<?php
	$sql = mysqli_query($database,"SELECT matchnum FROM AnnArbor WHERE ScouterName='WillR'");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='WillR'");
	$number2=mysqli_num_rows($sql2);
	
	$sql2 = mysqli_query($database,"SELECT matchnum FROM mytable WHERE ScouterName='WillR'");
	$number3=mysqli_num_rows($sql3);
	
	
	$totalmatchescouted = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_matchscouted='$totalmatchescouted' WHERE user_username='WillR'")?>

<?php
	//get results from database
	$sql4 = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE ScouterName='WillR'");
	$number4=mysqli_num_rows($sql4);
	
	$sql5 = mysqli_query($database,"SELECT teamnum FROM pit WHERE Inputter='WillR'");
	$number5=mysqli_num_rows($sql5);
	
	$totalpitentries = ($number4 + $number5);
mysqli_query($database,"UPDATE user SET user_pitentries='$totalpitentries' WHERE user_username='WillR'")?>


<?php
	//get results from database
	$sql = mysqli_query($database,"SELECT teamnum FROM pitbackup WHERE scouter='WillR' and drivetype IS NOT NULL");
	$number=mysqli_num_rows($sql);
	
	$sql2 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter='WillR' and disregard IS NOT NULL");
	$number2=mysqli_num_rows($sql2);
	
	$sql3 = mysqli_query($database,"SELECT teamnum FROM pit WHERE scouter2='WillR' and disregard IS NOT NULL");
$number3=mysqli_num_rows($sql3);?>
<?php $totalpitscouts = ($number + $number2 + $number3);
mysqli_query($database,"UPDATE user SET user_pitscouts='$totalpitscouts' WHERE user_username='WillR'")?>


<?php
$sql3 = mysqli_query($database,"SELECT user_extras FROM 2017_game.user WHERE user_username='WillR'");?>


<center>
	RANKINGS SUCCESSFULLY UPDATED
	<br>
	<button id="all-users" class="float-left submit-button" >Back to Leaderboard</button>
	<script type="text/javascript">
		document.getElementById("all-users").onclick = function () {
			location.href = "all-users.php";
		};
	</script>
</center>