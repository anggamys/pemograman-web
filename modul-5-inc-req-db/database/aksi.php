<?php

include_once "./koneksi.php";

function addMahasiswa($koneksi, $nama, $email, $web, $alamat)
{
    global $mysqli;
    $query = "INSERT INTO table_mahasiswa (nama, email, web, alamat) VALUES ('$nama', '$email', '$web', '$alamat')";

    $eksekusi = mysqli_query($koneksi, $query);

    if ($eksekusi) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan: " . mysqli_error($koneksi);
    }
}

function getAllMahasiswa($connection)
{
    $query = "SELECT * FROM table_mahasiswa";
    $result = $connection->query($query);
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}

function getMahasiswaById($connection, $id)
{
    $query = "SELECT * FROM table_mahasiswa WHERE Kode = $id";
    $result = $connection->query($query);
    return $result ? $result->fetch_assoc() : null;
}

function updateMahasiswa($connection, $id, $nama, $email, $web, $alamat)
{
    $query = "UPDATE table_mahasiswa SET nama='$nama', email='$email', web='$web', alamat='$alamat' WHERE Kode=$id";
    return $connection->query($query);
}

function deleteMahasiswa($connection, $id)
{
    $query = "DELETE FROM table_mahasiswa WHERE Kode=$id";
    return $connection->query($query);
}
