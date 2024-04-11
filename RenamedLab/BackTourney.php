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

//mysql_select_db("tourney2",$con);

// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysqli_real_escape_string($conn, $username);
// $password = mysqli_real_escape_string($conn, $password);


$sql = "SELECT Username, Password FROM organizer where Username='$username' and Password= '$password'";
$result = $conn->query($sql);
$check =mysqli_fetch_array($result);

if(isset($check)){
	
	echo 'success';
	$newsql = "SELECT Player_Name FROM player";
        $newresult = $conn->query($newsql);
	$newdata = mysqli_fetch_array($newresult);
	$json = json_encode($newdata);
	echo "<script>var stringData= $json;</script>";
}

else
{
	echo 'failure';
}

function createPlayer($newName, $newSeed)
{
	$newSQL = "INSERT INTO player (Player_Name, Seed, P_ID) VALUES ('$newName', '$newSeed', (SELECT MAX(P_ID) FROM player) + 1)";
}


?>