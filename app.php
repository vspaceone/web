<?php

include('configuration.php');

$room;
$sensor;
$valuec;
$days = 7;

if (isset($_GET['room'])){
  $room = $_GET['room'];
}

if (isset($_GET['sensor'])){
  $sensor = $_GET['sensor'];
}

if (isset($_GET['valuec'])){
  $valuec = $_GET['valuec'];
}

if (isset($_GET['days'])){
  $days = $_GET['days'];
}

if (!isset($_GET['room']) && !isset($_GET['sensor'])){
  echo "Läuft";
}

$cachefile = $room . "_" . $sensor . ".json";

if ($enable_caching && file_exists($cachefile)) {

  echo file_get_contents($cachefile);

} else {

  $mysqli = new mysqli($db_host, $db_username, $db_password, $db_table);
  if ($mysqli->connect_errno) {
    echo "Verbindung fehlgeschlagen: " . $mysqli->connect_error;
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
  }

  $getTemp = "SELECT s.value, s.time FROM SensorData s WHERE s.room_id = (SELECT Room_ID FROM Rooms r WHERE r.altname = ?) AND s.type = 'temperature' AND s.time > NOW() - INTERVAL ? DAY ORDER BY s.time DESC";
  $getHumi = "SELECT s.value, s.time FROM SensorData s WHERE s.room_id = (SELECT Room_ID FROM Rooms r WHERE r.altname = ?) AND s.type = 'humidity' AND s.time > NOW() - INTERVAL ? DAY ORDER BY s.time DESC";

  $array = array();

  if ($sensor == 'temperature'|| $sensor == 'th'){
    $rid = $room;
    $range = $days;

    $statement = $mysqli->prepare($getTemp);
    $statement->bind_param('si', $rid, $range);

    $statement->execute();

    $result = $statement->get_result();

    $numrows = mysqli_num_rows($result);
    $skip = 0;
    $skip = $numrows / $valuec;

    $s = 0;
    $array['temperature'] = array();
    while($row = $result->fetch_object()) {
      //$valuec--;
      $s--;

      if ($s <= 0){
        $s = $skip;
        $array['temperature'][] = array('time' => $row->time, 'value' => $row->value );
      }

    }

  }

  if ($sensor == 'humidity' || $sensor == 'th'){

    $rid = $room;
    $range = $days;

    $statement = $mysqli->prepare($getHumi);
    $statement->bind_param('si', $rid, $range);

    $statement->execute();

    $result = $statement->get_result();

    $numrows = mysqli_num_rows($result);
    $skip = 0;
    $skip = $numrows / $valuec;

    $s = 0;
    $array['humidity'] = array();
    while($row = $result->fetch_object()) {
      //$valuec--;
      $s--;

      if ($s <= 0){
        $s = $skip;
        $array['humidity'][] = array('time' => $row->time, 'value' => $row->value );
      }

    }

  }

  echo json_encode($array);
}

?>
