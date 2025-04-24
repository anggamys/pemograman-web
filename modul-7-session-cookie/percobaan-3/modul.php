<?php
$halaman = isset($_GET["page"]) ? $_GET["page"] : "home"; // Mengakses variable URL dengan pengecekan

if ($halaman == "home") {
    include "depan.php";
} elseif ($halaman == "profil") {
    include "profil.php";
} elseif ($halaman == "galeri") {
    include "gallery.php";
} else {
    // Halaman default jika parameter tidak cocok
    echo "<p>Selamat datang di halaman utama website kami.</p>";
    echo "<p>Silahkan pilih menu di sebelah kiri untuk melihat konten.</p>";
}
?>
