<?php

echo "Nama anda adalah " . $_COOKIE["nama"];
echo "Nama teman anda adalah " . $_COOKIE["nama_teman"];

echo "<br>";

setcookie("nama");
echo "Nama anda sekarang ada/tidak?";

$_COOKIE["nama"] . "<br>";

echo "Nama teman sekarang anda ada/tidak?";
$_COOKIE["nama_teman"] . "<br>";
echo "<br>";
