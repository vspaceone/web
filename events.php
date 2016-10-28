<?php

include('configuration.php');

if (isset($_GET['name'])){
  $name = $_GET['name'];
}

if (isset($_GET['email'])){
  $email = $_GET['email'];
}

if (isset($_GET['age'])){
  $age = $_GET['age'];
}

if( $name == null ){
  die("Please define name!");
}
if( $email == null ){
  die("Please define email!");
}
if( $age == null ){
  die("Please define age!");
}


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
