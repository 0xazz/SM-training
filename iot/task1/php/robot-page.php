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
$sql = "SELECT * FROM `engines` WHERE 1";

//send the sql query and inform if errors occur
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
  //printing the record in a tabel format
  $row =  $result->fetch_assoc();
  echo '<table><tr><th>Engine</th><th>Value</th></tr>'.
       '<tr><td>Engine 1: </td><td>'.$row['eng1'].'</td></tr>'.
       '<tr><td>Engine 2: </td><td>'.$row['eng2'].'</td></tr>'.
       '<tr><td>Engine 3: </td><td>'.$row['eng3'].'</td></tr>'.
       '<tr><td>Engine 4: </td><td>'.$row['eng4'].'</td></tr>'.
       '<tr><td>Engine 5: </td><td>'.$row['eng5'].'</td></tr>'.
       '<tr><td>Engine 6: </td><td>'.$row['eng6'].'</td></tr>';
       if($row['botstat'] === '1')
        echo '<tr><th>Robot status: </th><td>STARTED</td></tr></table';
        else echo '<tr><th>Robot status: </th><td>STOPPED</td></tr></table';
  } else {
    echo "Error reading record: " . $conn->error;
  }

?>