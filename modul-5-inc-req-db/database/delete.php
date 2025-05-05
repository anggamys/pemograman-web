<?php
include_once "./koneksi.php";
include_once "./aksi.php";

$id = $_GET['id'] ?? null;

if ($id) {
    // Panggil fungsi untuk hapus data berdasarkan id
    $result = deleteMahasiswa($koneksi, $id);

    if ($result) {
        echo "Data berhasil dihapus.";
        header("Location: datamahasiswa.php");
    } else {
        echo "Terjadi kesalahan saat menghapus data. <a href='datamahasiswa.php'>Kembali</a>";
    }
} else {
    echo "ID tidak ditemukan. <a href='datamahasiswa.php'>Kembali ke daftar mahasiswa</a>";
}
