<?php

include('credentials.php');

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_table);
if ($mysqli->connect_errno) {
    echo "Verbindung fehlgeschlagen: " . $mysqli->connect_error;
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

$getTemp = "SELECT s.value, s.time FROM Rooms r, SensorData s WHERE r.altname = ? AND s.type = 'temperature' AND r.room_id = s.room_id ORDER BY s.time DESC LIMIT ?";
$getHumi = "SELECT s.value, s.time FROM Rooms r, SensorData s WHERE r.altname = ? AND s.type = 'humidity' AND r.room_id = s.room_id ORDER BY s.time DESC LIMIT ?";

//$getCombi = "SELECT s.value, s.time, s.unit, s.type, r.altname FROM Rooms r, SensorData s WHERE r.room_id = s.room_id ORDER BY s.time DESC LIMIT ?";

$room;
$sensor;
$valuec;
$skip = 0;
$array = array();

if (isset($_GET['room'])){
    $room = $_GET['room'];   
}

if (isset($_GET['sensor'])){
    $sensor = $_GET['sensor'];   
}

if (isset($_GET['valuec'])){
    $valuec = $_GET['valuec'];   
}

if (isset($_GET['skip'])){
    $skip = $_GET['skip'];   
}

if (isset($_GET['combined'])){
    $combined = $_GET['combined'];   
}

if (!isset($_GET['room']) && !isset($_GET['sensor'])){
    echo "Lauft gut :D";
}

if ($sensor == 'temperature'|| $sensor == 'th'){
    
    $statement = $mysqli->prepare($getTemp);
    $statement->bind_param('si', $rid, $limit);
    $rid = $room;
    $limit = $valuec;
    
    $statement->execute();
    
    $result = $statement->get_result();
    
    
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
    
    $statement = $mysqli->prepare($getHumi);
    $statement->bind_param('si', $rid, $limit);
    $rid = $room;
    $limit = $valuec;
    
    $statement->execute();
    
    $result = $statement->get_result();
    
    
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

?>