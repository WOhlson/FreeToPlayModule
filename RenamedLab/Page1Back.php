<?php

// Grab User submitted information
$tournamentName = $_REQUEST["Tname"];
$Tid = $_REQUEST["tid"];


// Create connection #servername, username, password, db 
$conn = mysqli_connect("localhost", "root", "","tourney2");
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

$sql = "INSERT INTO tournament VALUES 
    ($Tid, '$tournamentName', 1)";
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT T_ID, Tment_name, O_ID FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Tournament ID:" . $row["T_ID"]. " Tournament Name:" . $row["Tment_name"]. " Organizer ID:" . $row["O_ID"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>