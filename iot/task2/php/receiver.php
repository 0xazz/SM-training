<?php

//get the data from the client
$move = $_GET['move'];

//prepare the database connection credentials 
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
$sql = "UPDATE `moves` SET `move`='$move' WHERE 1";

//send the sql query and inform if errors occur
if ($conn->query($sql) === TRUE) {
  echo "bot move sent successfully: ".$move;
  http_response_code(200); //send the response code to the client
} else {
  echo "Error updating record: " . $conn->error;
}

//clese the connection 
$conn->close();

?>
