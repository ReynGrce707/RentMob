<?php
// Koneksi ke database
include "koneksi.php";

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Get the id from the URL parameter
$id = $_GET['id'];

// Query untuk menghapus data petugas
$sql = "DELETE FROM tb_member WHERE nik = '$id'";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Akun Berhasil Dihapus');
    location.href='usr.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>