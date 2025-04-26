<?php

require "./cobaclass.php";

$as = new CobaPertama();

$isi = $as->cetak_nama("23081010008", "Moh Angga yunus", "A");

$isi = $as->alamat;

echo $isi . "<br>";
