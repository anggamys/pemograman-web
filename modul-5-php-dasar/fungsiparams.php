<?php

$nama = "Angga";

// Fungsi tanpa reference (pass by value)
function bkn_reference($nama)
{
    $nama .= " Memang tidak gaul";
    echo "Dalam fungsi bkn_reference(): $nama<br>";
}

// Fungsi dengan reference (pass by reference)
function reference(&$nama)
{
    $nama .= " Memang paling gaul";
    echo "Dalam fungsi reference(): $nama<br>";
}

// Panggil fungsi bkn_reference
bkn_reference($nama);
echo "Setelah bkn_reference(): $nama<br><br>";

// Panggil fungsi reference
reference($nama);
echo "Setelah reference(): $nama<br>";
