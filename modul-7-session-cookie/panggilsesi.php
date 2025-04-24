<?php
session_start();

if (isset($_SESSION["var_session_1"]) && isset($_SESSION["var_session_2"])) {
    echo $_SESSION["var_session_1"];
    echo $_SESSION["var_session_2"];
} else {
    echo "Sesi kosong";
}
