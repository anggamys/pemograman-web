<?php
session_start();

echo $_SESSION["var_session_1"] = "";
echo $_SESSION["var_session_2"] = "";

session_destroy();
