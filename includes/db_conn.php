<?php

$server = "localhost";
$username = "agnjobba_agnjobba_service";
$password = "agnjobba_service";
$db = "agnjobba_service";
// Create connection
$dbc = mysqli_connect($server, $username, $password, $db);
// Check connection
if (!$dbc) {

    die("Connection failed: " . mysqli_connect_error());
}
?>