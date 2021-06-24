<?php

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

//if the connection was succecful, prepare the command to read from the database
$sql = "SELECT * FROM `moves` WHERE 1";

//send the sql query and inform if errors occur
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  //printing the record
  $row =  $result->fetch_assoc();
  echo '<h1>'.$row['move'].'</h1>';

  //error occured
} else {
    echo "Error reading record: " . $conn->error;
}

?>