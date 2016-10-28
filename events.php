<?php

include('configuration.php');

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_table);
if ($mysqli->connect_errno) {
  echo "Verbindung fehlgeschlagen: " . $mysqli->connect_error;
  die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

$assignment = "INSERT INTO Events(Name,Email,Age,Timestamp) VALUE(?,?,?,NOW())";


if ($insertMode){
  $statement = $mysqli->prepare($assignment);
  $statement->bind_param('sss', $name, $email, $age);

  $statement->execute();

  $result = $statement->get_result();



}


?>
