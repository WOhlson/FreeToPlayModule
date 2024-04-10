<?php

// Grab User submitted information
$username = $_POST["user"];
$password = $_POST["pass"];



// Create connection #servername, username, password, db 
$conn = mysqli_connect("localhost", "root", "","freetoplay");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

//mysql_select_db("class",$con);

// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysqli_real_escape_string($conn, $username);
// $password = mysqli_real_escape_string($conn, $password);


$sql = "SELECT Username, Password FROM Player where Username='$username' and Password= '$password'";
$result = $conn->query($sql);
$check =mysqli_fetch_array($result);

if(isset($check)){
	
	echo 'success';
}

else
{
	echo 'failure';
}

function createPlayer($newName, $Seed)
{
	$newSQL = "INSERT INTO player (Player_Name, Seed, P_ID) VALUES ('$newName', '$Seed', ((SELECT MAX(P_ID) FROM Player) + 1))";
}


?>