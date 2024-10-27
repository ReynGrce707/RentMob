<?php
include "koneksi.php"; // Pastikan ini adalah jalur yang benar ke file koneksi Anda

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil ID transaksi dari URL
$id_transaksi = $_GET['id'];

// Update status menjadi 'ambil' dan set tanggal ambil
$sql_update = "UPDATE tb_transaksi SET status = 'approve' WHERE id_transaksi = '$id_transaksi'";

if ($koneksi->query($sql_update) === TRUE) {
    echo "<script>alert('Berhasil Menyetujui Perentalan!');</script>";
    echo "<script>window.location.href='data_rental.php';</script>";
} else {
    echo "Error: " . $koneksi->error;
}

$koneksi->close();
?>