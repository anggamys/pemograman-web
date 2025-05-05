<?php

$host = "localhost:3307";
$username = "root";
$password = "C0del@b08";
$database = "db_23081010008_angga";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
