<?php
include_once "./koneksi.php";
include_once "./aksi.php";

$id = $_GET['id'] ?? null;
$message = '';
$status = '';

if ($id) {
    // Hapus data mahasiswa berdasarkan ID
    $result = deleteMahasiswa($koneksi, $id);

    if ($result) {
        $message = "Data berhasil dihapus.";
        $status = "success";
    } else {
        $message = "Terjadi kesalahan saat menghapus data.";
        $status = "error";
    }
} else {
    $message = "ID tidak ditemukan.";
    $status = "error";
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hapus Mahasiswa</title>
    <meta http-equiv="refresh" content="2;url=datamahasiswa.php">
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        .message-box {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .success {
            border-left: 6px solid #4caf50;
            color: #2e7d32;
        }

        .error {
            border-left: 6px solid #f44336;
            color: #c62828;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        small {
            color: #888;
        }

        a {
            text-decoration: none;
            color: #1976d2;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="message-box <?= $status ?>">
        <p><?= htmlspecialchars($message) ?></p>
        <small>Anda akan diarahkan ke <a href="datamahasiswa.php">daftar mahasiswa</a> dalam 2 detik...</small>
    </div>
</body>

</html>