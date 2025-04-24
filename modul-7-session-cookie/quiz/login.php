<?php
session_start();

// Credential sederhana untuk contoh
$valid_username = "admin";
$valid_password = "admin123";

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifikasi username dan password
    if ($username === $valid_username && $password === $valid_password) {
        // Set session jika login sukses
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        // Redirect ke halaman syadmin
        header("Location: syadmin.php");
        exit();
    } else {
        // Redirect kembali ke halaman login dengan pesan error
        header("Location: index.php?error=1");
        exit();
    }
} else {
    // Redirect jika form tidak disubmit
    header("Location: index.php");
    exit();
}
?>
