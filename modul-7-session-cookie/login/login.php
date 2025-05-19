<?php
include "./koneksi.php";

function login($koneksi, $username, $password)
{
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $eksekusi = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($eksekusi);

    if ($data) {
        session_start();
        $_SESSION['username'] = $data['username'];
        header("Location: ./dashboard.php");
        exit();
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    login($koneksi, $username, $password);
}
?>

<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Login">
</form>