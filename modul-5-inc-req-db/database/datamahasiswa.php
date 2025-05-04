<table border="1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Web</th>
        <th>Isi</th>
        <th>Aksi</th>
    </tr>

<?php
include "./koneksi.php";

$result = getAllMahasiswa($connection);

if ($result && $result->num_rows > 0) {
    while ($data = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $data["Nama"]; ?></td>
        <td><?php echo $data["Email"]; ?></td>
        <td><?php echo $data["web"]; ?></td>
        <td>
            <!-- <?php echo $data["isi"]; ?> -->
        </td>
        <td>
            <a href="form.php?id=<?php echo $data["Kode"]; ?>">Edit</a> |
            <a href="aksi.php?id=<?php echo $data[
                "Kode"
            ]; ?>&proses=hapus">Hapus</a>
        </td>
    </tr>
<?php }
} else {
    echo "<tr><td colspan='5'>Data belum ada</td></tr>";
}
?>
</table>
