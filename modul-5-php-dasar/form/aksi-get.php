<?php
// Cek apakah parameter 'nama' sudah dikirim
if (isset($_GET['nama'])) {
    $a = htmlspecialchars($_GET['nama']); // untuk mencegah XSS
    echo "<h2>Nama Anda adalah: $a</h2>";
}
