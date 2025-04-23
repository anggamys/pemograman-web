<?php
$hari_sekarang = date("l");

switch ($hari_sekarang) {
    case "Moday":
        $hari = "Senin";
        break;
    case "Tuesday":
        $hari = "Selasa";
        break;
    case "Wednesday":
        $hari = "Rabu";
        break;
    case "Thursday":
        $hari = "Kamis";
        break;
    case "Friday":
        $hari = "Jumat";
        break;
    case "Saturday":
        $hari = "Sabtu";
        break;
    default:
        $hari = "Minggu";
        break;
}

echo "Hari ini adalah $hari <br>";
