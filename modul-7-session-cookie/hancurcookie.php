<?php

setcookie("nama", "", time() - 3600);
setcookie("nama_teman", "", time() - 3600);

echo "Nama anda adalah " . ($_COOKIE["nama"] ?? '');
echo "Nama teman anda adalah " . ($_COOKIE["nama_teman"] ?? '');

echo "<br>";

echo "Nama anda sekarang ada/tidak?";
echo ($_COOKIE["nama"] ?? '') . "<br>";

echo "Nama teman sekarang anda ada/tidak?";
echo ($_COOKIE["nama_teman"] ?? '') . "<br>";

echo "<br>";
