<?php
// Cek apakah parameter 'nama' sudah dikirim
if (isset($_GET['nama'])) {
    $a = htmlspecialchars($_GET['nama']); // untuk mencegah XSS
    echo "Hallo, nama saya adalah $a <br>";
}
