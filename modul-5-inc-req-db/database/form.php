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
    // Ambil data mahasiswa untuk diedit
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
        // Update data mahasiswa
        updateMahasiswa($koneksi, $kode, $nama, $email, $web, $alamat);
        echo "Data berhasil diupdate";
    } else {
        // Tambah data mahasiswa baru
        addMahasiswa($koneksi, $nama, $email, $web, $alamat);
        echo "Data berhasil ditambahkan";
    }
}

?>

<form action="" method="post">
    <?php if ($kode): ?>
        <input type="hidden" name="id" value="<?= htmlspecialchars($kode) ?>">
    <?php endif; ?>

    <label for="nama">Nama:</label>
    <input type="text" name="nama" placeholder="Masukkan nama" value="<?= htmlspecialchars($mahasiswa['Nama'] ?? '') ?>">

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Masukkan Email" value="<?= htmlspecialchars($mahasiswa['Email'] ?? '') ?>">

    <label for="web">Website:</label>
    <input type="url" name="web" placeholder="Masukkan Website" value="<?= htmlspecialchars($mahasiswa['web'] ?? '') ?>">

    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" placeholder="Masukkan Alamat" value="<?= htmlspecialchars($mahasiswa['alamat'] ?? '') ?>">

    <button type="submit"><?= $kode ? 'Update' : 'Submit' ?></button>
</form>