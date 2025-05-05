<?php

$nama = "Angga";
echo "Nama saya adalah $nama";

function salam()
{
    global $nama;
    echo "Halo, nama saya adalah " . $nama;
}
