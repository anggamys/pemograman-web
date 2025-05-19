<?php
// Mulai sesi
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Silakan login terlebih dahulu!'); window.location.href = 'index.php';</script>";
    exit();
}

// Jika tombol logout ditekan
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_destroy();
    header("Location: ./index.php");
    exit();
}
?>

<p>Ini halaman dashboard</p>
<p>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>

<!-- Form Logout -->
<form method="POST" action="">
    <input type="submit" value="Logout">
</form>