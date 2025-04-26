<?php

$host = "localhost:3307";
$username = "root";
$password = "C0del@b08";
$database = "db_23081010008_angga";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
