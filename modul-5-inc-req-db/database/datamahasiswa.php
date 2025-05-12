<?php
include_once "./koneksi.php";
include_once "./aksi.php";

$dataMahasiswa = getAllMahasiswa($koneksi);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #1976d2;
            color: white;
        }

        th,
        td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #1976d2;
            font-weight: bold;
        }

        a:hover {
            color: #004ba0;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #888;
        }

        .btn {
            background-color: #1976d2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        .btn:hover {
            background-color: #115293;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Daftar Mahasiswa</h2>

        <a class="btn" href="form.php">+ Tambah Mahasiswa</a>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($dataMahasiswa)): ?>
                    <?php foreach ($dataMahasiswa as $mahasiswa): ?>
                        <tr>
                            <td><?= htmlspecialchars($mahasiswa['Nama']) ?></td>
                            <td><?= htmlspecialchars($mahasiswa['Email']) ?></td>
                            <td>
                                <?php if (!empty($mahasiswa['web'])): ?>
                                    <a href="<?= htmlspecialchars($mahasiswa['web']) ?>" target="_blank">
                                        <?= htmlspecialchars(parse_url($mahasiswa['web'], PHP_URL_HOST) ?? $mahasiswa['web']) ?>
                                    </a>
                                <?php else: ?>
                                    <em>-</em>
                                <?php endif; ?>
                            </td>
                            <td><?= nl2br(htmlspecialchars($mahasiswa['alamat'])) ?></td>
                            <td>
                                <?php if (!empty($mahasiswa['Kode'])): ?>
                                    <a href="form.php?id=<?= urlencode($mahasiswa['Kode']) ?>">Edit</a> |
                                    <a href="delete.php?id=<?= urlencode($mahasiswa['Kode']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                                <?php else: ?>
                                    <em>Tidak tersedia</em>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td class="empty" colspan="5">Belum ada data mahasiswa.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>