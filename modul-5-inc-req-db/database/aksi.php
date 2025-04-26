<?php
include "./koneksi.php";

// Get post data
$nama = $_POST["nama"];
$email = $_POST["email"];
$web = $_POST["web"];
$alamat = $_POST["alamat"];

// Function to add a new student
function addMahasiswa($connection, $nama, $email, $web, $alamat)
{
    // Use prepared statement to prevent SQL injection
    $query =
        "INSERT INTO table_mahasiswa (nama, email, web, alamat) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nama, $email, $web, $alamat);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

function getMahasiswaById($connection, $id)
{
    // Use prepared statement to prevent SQL injection
    $query = "SELECT * FROM table_mahasiswa WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

// Function to delete a student
function deleteMahasiswa($connection, $id)
{
    // Use prepared statement to prevent SQL injection
    $query = "DELETE FROM table_mahasiswa WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

// Call the addMahasiswa function with the form data
$result = addMahasiswa($connection, $nama, $email, $web, $alamat);

// Redirect or display message based on result
if ($result) {
    echo "Data berhasil disimpan!";
    // Optionally redirect to another page
    // header("Location: list.php");
} else {
    echo "Error: " . mysqli_error($connection);
}
?>
