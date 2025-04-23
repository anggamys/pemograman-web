<?php

function lingkaran($jari)
{
    $hitung = pi() * $jari * $jari;
    return $hitung;
}

function tabung($tinggi, $luas_lingkaran)
{
    $hitung = $luas_lingkaran * $tinggi;
    return $hitung;
}

echo "Nilai volume tabung adalah " . tabung(10, lingkaran(7)) . "<br>";
