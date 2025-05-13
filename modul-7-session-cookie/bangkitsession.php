<?php
session_start();

$_SESSION["var_session_1"] = "Moh Angga Yunus";
$_SESSION["var_session_2"] = "08123456789";

if (isset($_SESSION["var_session_1"]) && isset($_SESSION["var_session_2"])) {
    echo "Session berhasil dibuat";
}
