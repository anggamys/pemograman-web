<?php
include_once "./koneksi.php";
include_once "./aksi.php";

$kode = $_GET['id'] ?? null;
$mahasiswa = [
    'nama' => '',
    'email' => '',
    'web' => '',
    'alamat' => ''
];

if ($kode) {
    $result = getMahasiswaById($koneksi, $kode);
    if ($result) {
        $mahasiswa = $result;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $web = $_POST['web'] ?? '';
    $alamat = $_POST['alamat'] ?? '';

    if ($kode) {
        updateMahasiswa($koneksi, $kode, $nama, $email, $web, $alamat);
        $message = "Data berhasil diupdate!";
    } else {
        addMahasiswa($koneksi, $nama, $email, $web, $alamat);
        $message = "Data berhasil ditambahkan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Mahasiswa</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        input[type="url"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            background-color: #1976d2;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #115293;
        }

        .alert {
            background: #e0ffe0;
            border-left: 6px solid #4caf50;
            padding: 10px;
            margin-bottom: 20px;
            color: #2e7d32;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2><?= $kode ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' ?></h2>

        <?php if (!empty($message)): ?>
            <div class="alert"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>

        <form action="" method="post">
            <?php if ($kode): ?>
                <input type="hidden" name="id" value="<?= htmlspecialchars($kode) ?>">
            <?php endif; ?>

            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama lengkap" value="<?= htmlspecialchars($mahasiswa['Nama'] ?? '') ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Contoh: kamu@email.com" value="<?= htmlspecialchars($mahasiswa['Email'] ?? '') ?>" required>

            <label for="web">Website:</label>
            <input type="url" name="web" placeholder="https://websitekamu.com" value="<?= htmlspecialchars($mahasiswa['web'] ?? '') ?>">

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" placeholder="Jl. Mawar No. 123" value="<?= htmlspecialchars($mahasiswa['alamat'] ?? '') ?>">

            <button type="submit"><?= $kode ? 'Update Data' : 'Simpan Data' ?></button>
        </form>
    </div>
</body>

</html>