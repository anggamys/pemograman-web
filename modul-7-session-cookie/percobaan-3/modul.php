<?php
$halaman = $_GET["page"] ?? "home";

switch ($halaman) {
    case "home":
        include "depan.php";
        break;
    case "profil":
        include "profil.php";
        break;
    case "galeri":
        include "gallery.php";
        break;
    default:
        echo "<p>Halaman tidak ditemukan.</p>";
        break;
}
