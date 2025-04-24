<?php
session_start();

$_SESSION["var_session_1"] = "Masukkan nama anda";
$_SESSION["var_session_2"] = "Masukkan No Hp anda";

if (isset($_SESSION["var_session_1"]) && isset($_SESSION["var_session_2"])) {
    echo "Session berhasil dibuat";
}
