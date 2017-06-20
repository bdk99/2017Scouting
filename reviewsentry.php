<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "team3641", "password", "2017_game");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_POST['id']); 
$Like = mysqli_real_escape_string($link, $_POST['Like']);
$DidntLike = mysqli_real_escape_string($link, $_POST['DidntLike']);
$ScouterName = mysqli_real_escape_string($link, $_POST['ScouterName']); 
$test = mysqli_real_escape_string($link, $_POST['test']);

$sql = "INSERT INTO reviews". "(id, Liked, DidntLike, ScouterName, test)". "VALUES('$id','$Like','$DidntLike','$ScouterName','$test')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
header("Location: http://3641scouting.local/home.php");
exit();
?>