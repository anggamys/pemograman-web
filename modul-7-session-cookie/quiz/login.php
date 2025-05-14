<?php
session_start();

$valid_username = "admin";
$valid_password_hash = password_hash("admin123", PASSWORD_DEFAULT);

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (
        $username === $valid_username &&
        password_verify($password, $valid_password_hash)
    ) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        header("Location: syadmin.php");
        exit();
    } else {
        header("Location: index.php?error=1");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
