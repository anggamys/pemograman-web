<?php
$halaman = $_GET["page"] ?? "home";

if ($halaman == "home") {
    include "depan.php";
} elseif ($halaman == "profil") {
    include "profil.php";
} elseif ($halaman == "galeri") {
    include "gallery.php";
} else {
    include "salah.php";
}
