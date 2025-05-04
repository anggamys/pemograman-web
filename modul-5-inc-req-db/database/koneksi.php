<?php

$host = "localhost:3307";
$username = "root";
$password = "C0del@b08";
$database = "db_23081010008_angga";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    echo "Connection failed: " . $mysqli->connect_error;
    exit();
} else {
    echo "Connection successful!";
}
