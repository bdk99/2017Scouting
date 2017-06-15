<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "p1nCush1n";
$dbname = "2017_game";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>