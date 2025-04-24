<?php

if (isset($_COOKIE["nama"]) && isset($_COOKIE["nama_teman"])) {
    echo "Nama anda adalah " . $_COOKIE["nama"];
    echo "Nama teman anda adalah " . $_COOKIE["nama_teman"];
} else {
    echo "Cookie belum disetel!";
}
