<?php

//get the data from the client
$eng1 = $_GET['eng1'];
$eng2 = $_GET['eng2'];
$eng3 = $_GET['eng3'];
$eng4 = $_GET['eng4'];
$eng5 = $_GET['eng5'];
$eng6 = $_GET['eng6'];
if(isset($botstat)) $botstat = $_GET['botstat'];

//prepare the database connection cridentials 
$server = "localhost";
$user = "root";
$pass = "";
$db = "bot_control";

//estaplish the database connection and infom when errors occur
$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  

//if the connection was succecful, prepare the command to update the database
$sql = "UPDATE `engines` SET `eng1`='$eng1',`eng2`='$eng2',`eng3`='$eng3',`eng4`='$eng4',`eng5`='$eng5',`eng6`='$eng6'";

//start the robot only if set
if(isset($start))
  $sql. "`botstat`='1' WHERE 1";
else $sql. "WHERE 1";

//send the sql query and inform if errors occur
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  http_response_code(200); //send the response code to the client
} else {
  echo "Error updating record: " . $conn->error;
}




//clese the connection 
$conn->close();

?>