<?php

include('configuration.php');

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_table);
if ($mysqli->connect_errno) {
  echo "Verbindung fehlgeschlagen: " . $mysqli->connect_error;
  die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

$events = "SELECT * FROM Events";
$assignment = "INSERT INTO Events(Name,Email,Age,EventId,Timestamp) VALUE(?,?,?,?,NOW())";


if ($insertMode){
  $statement = $mysqli->prepare($assignment);
  $statement->bind_param('sssi', $name, $email, $age, $eventId);

  $statement->execute();

  $result = $statement->get_result();



}else{
  $statement = $mysqli->prepare($events);

  $statement->execute();

  $result = $statement->get_result();

  $numrows = mysqli_num_rows($result);

  $array = array();
  while($row = $result->fetch_object()) {
    $array[] = array('Name' => $row->Name, 'Id' => $row->Id, 'Description' => $row->Description, 'Date' => $row->Date, 'Time' => $row->Time );
  }

  echo json_encode($array);
}


?>
