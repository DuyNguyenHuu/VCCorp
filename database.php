<?php

$host = "localhost";
$database = "quanly";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
?>