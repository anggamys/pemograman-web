<?php

include_once "./koneksi.php";

function addMahasiswa($nama, $email, $web, $alamat)
{
    $query = "INSERT INTO mahasiswa (nama, email, web, alamat) VALUES ('$nama', '$email', '$web', '$alamat')";

    $eksekusi = mysqli_query($mysqli, $query);

    if ($eksekusi) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan";
    }
}
