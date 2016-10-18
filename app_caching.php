<?php

include('configuration.php');

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_table);
if ($mysqli->connect_errno) {
  echo "Verbindung fehlgeschlagen: " . $mysqli->connect_error;
  die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

$getTemp = "SELECT s.value, s.time FROM Rooms r, SensorData s WHERE r.altname = ? AND s.type = 'temperature' AND r.room_id = s.room_id AND s.time > NOW() - INTERVAL 7 DAY ORDER BY s.time DESC";
$getHumi = "SELECT s.value, s.time FROM Rooms r, SensorData s WHERE r.altname = ? AND s.type = 'humidity' AND r.room_id = s.room_id AND s.time > NOW() - INTERVAL 7 DAY ORDER BY s.time DESC";

$valuec = 200;

foreach ($caching_rooms as $room) {
  fwrite(fopen($room . "_temperature.json", "w"), json_encode(temperature($room)));
  fwrite(fopen($room . "_humidity.json", "w"), json_encode(humidity($room)));
  fwrite(fopen($room . "_th.json", "w"), json_encode(array_merge(temperature($room), humidity($room))));
}

function temperature($rid)
{
  $array = array();

  $statement = $mysqli->prepare($getTemp);
  $statement->bind_param('s', $rid);

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

  return $array;
}

function humidity($rid)
{
  $array = array();
  $rid = $room;

  $statement = $mysqli->prepare($getHumi);
  $statement->bind_param('s', $rid);

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

  return $array;
}

?>
