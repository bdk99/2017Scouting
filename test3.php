<?php
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("2017_game");

$result = mysql_query("SELECT user_id, user_username FROM user");

while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    printf ("ID: %s  Username: %s", $row[0], $row["user_username"]);
}

mysql_free_result($result);
?>