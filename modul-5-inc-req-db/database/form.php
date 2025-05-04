<?php

include_once "./aksi.php";

function submitForm() {}
?>

<form action="submitForm" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" placeholder="Masukkan nama">

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Masukkan Email">

    <label for="web">Website:</label>
    <input type="url" name="web" placeholder="Masukkan Website">

    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" placeholder="Masukkan Alamat">

    <button type="submit">Submit</button>
</form>
