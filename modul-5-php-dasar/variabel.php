<?php
$nama = "Angga";
$nilai_bhs = 90;
$nilai_ipa = 80.5;
$bentuk_boolean = true;

echo "Hallo, nama saya adalah $nama <br>";
echo "Nilai Bahasa Inggris saya adalah $nilai_bhs <br>";
echo "Nilai IPA saya adalah $nilai_ipa <br>";

if ($bentuk_boolean == true) {
    echo "Kondisi bernilai true <br>";
}

$nilai_bhs = (float)$nilai_bhs;
$nilai_ipa = (int)$nilai_ipa;

echo "Nilai bahasa setelah diubah menjadi float adalah $nilai_bhs <br>";
echo "Nilai IPA setelah diubah menjadi integer adalah $nilai_ipa <br>";
