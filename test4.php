<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $data = "2017_game";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$data);
?>
<?php
	$result=mysqli_query($database,"SELECT * FROM user") or die ("Query to get data from firsttable failed: ".mysql_error());
	echo "<table>";
    echo "<tr>";
	echo "<th>ID</th>
	<th>Username</th>
	<th>Password</th>
	<th>FirstName</th>
	<th>LastName</th>";
    echo "</tr>";
    while ($row=mysql_fetch_array($result)) {
        $user_id=$row["user_id"];
        $user_username=$row["user_username"];
        $user_password=$row["user_password"];
        $user_firstname=$row["user_firstname"];
        $user_lastname=$row["user_lastname"];
        echo "<tr>";
        echo "<td>$user_id</td>
		<td>$user_username</td>
		<td>$user_password</td>
		<td>$user_firstname</td>
		<td>$user_lastname</td>";
        echo "</tr>";        
	}
echo "</table>";?>
