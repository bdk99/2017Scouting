 <?php include '/var/www/_database/database.php' ?>   
<?php echo '<link rel="stylesheet" type="text/css" href="style.css">';?>
<center><h1 class="rainbowize">Pit Summary</h1><center>

<?php
mysql_connect("localhost", "root", "");
mysql_select_db("2017_game");
$result = mysql_query("select * from user");
while ($row = mysql_fetch_object($result)) 
{
    echo $row->user_id;	
    echo $row->user_username;
	echo $row->user_password;

}
mysql_free_result($result);
?>