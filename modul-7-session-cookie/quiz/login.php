<?php
session_start();

// Credential sederhana untuk contoh (di produksi, ambil dari database)
$valid_username = "admin";
$valid_password_hash = password_hash("admin123", PASSWORD_DEFAULT);

// Cek apakah form disubmit
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Verifikasi username dan password
    if (
        $username === $valid_username &&
        password_verify($password, $valid_password_hash)
    ) {
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
