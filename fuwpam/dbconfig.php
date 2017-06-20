<?php
$dbhost = "localhost";
$dbuser = "team3641";
$dbpass = "password";
$dbname = "2017_game";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>