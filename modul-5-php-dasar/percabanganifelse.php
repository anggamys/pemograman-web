<?php
$nilai_pratikum_php = 80;
$nilai_pratikum_jarkom = 90;

if ($nilai_pratikum_php > $nilai_pratikum_jarkom) {
    echo "Pratikum PHP lebih mudah dari Jarkom";
} elseif ($nilai_pratikum_php == $nilai_pratikum_jarkom) {
    echo "Pratikum PHP sama sulitnya dengan Jarkom";
} else {
    echo "Pratikum Jarkom lebih mudah dari PHP";
}
