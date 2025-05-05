<?php
include_once "./koneksi.php";
include_once "./aksi.php";

$dataMahasiswa = getAllMahasiswa($koneksi);
?>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Web</th>
        <th>Isi</th>
        <th>Aksi</th>
    </tr>

    <?php if (!empty($dataMahasiswa)): ?>
        <?php foreach ($dataMahasiswa as $mahasiswa): ?>
            <tr>
                <td><?= htmlspecialchars($mahasiswa['Nama']) ?></td>
                <td><?= htmlspecialchars($mahasiswa['Email']) ?></td>
                <td><?= htmlspecialchars($mahasiswa['web']) ?></td>
                <td><?= nl2br(htmlspecialchars($mahasiswa['alamat'])) ?></td>
                <td>
                    <?php if (!empty($mahasiswa['Kode'])): ?>
                        <a href="form.php?id=<?= urlencode($mahasiswa['Kode']) ?>">Edit</a> |
                        <a href="delete.php?id=<?= urlencode($mahasiswa['Kode']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
                    <?php else: ?>
                        <em>ID tidak tersedia</em>
                    <?php endif; ?>
                </td>

            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">Data belum tersedia.</td>
        </tr>
    <?php endif; ?>
</table>