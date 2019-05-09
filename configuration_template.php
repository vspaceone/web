<?php

/*
This a Template for the Configuration File of the Dashboard-Statistics.
The File should be configured to match your setup and renamed to 'configuration.php'.

The $db_* Variables should be obvious (Connection Settings for your MySQL Server).

If you want to use Caching you can set the $enable_caching Boolean.
Configure the rooms you want to cache with the $caching_rooms Array.
You do not have to cache all romms, even with caching enabled.
You can select a directory in which the Cache-Files should be saved with the $caching_path Variable.
*/

$db_host = '*';
$db_username = '*';
$db_password = '*';
$db_table = '*';

$enable_caching = False;
$caching_rooms = array("*");
$caching_path = "dashboard_cache/";

?>
