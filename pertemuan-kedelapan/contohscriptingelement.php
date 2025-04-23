<?php

function ketiga()
{
    $hitung = 4 + 7;
    return $hitung;
}

function keempat($sisi)
{
    $luas_persegi = $sisi * $sisi;
    return $luas_persegi;
}

echo "Nilai dari fungsi ketiga adalah " . ketiga() . "<br>";
?>

<?= keempat(5); ?>
