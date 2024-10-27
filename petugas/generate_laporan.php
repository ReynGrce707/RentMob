<?php
// Include FPDF library
require('fpdf.php');

// Database connection
include "koneksi.php"; // Pastikan jalur ini benar

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// Query to fetch data
$sql = "
SELECT 
    m.nama AS nama_lengkap,
    m.nik AS nik,
    mo.brand AS mobil_yang_dipinjam,
    mo.type AS type,
    mo.nopol AS nomor_polisi,
    m.alamat AS alamat_pelanggan,
    m.telp AS telp_pelanggan,
    b.total_bayar AS total_pembayaran,
    b.status AS status_pembayaran
FROM 
    tb_bayar b
JOIN 
    tb_kembali k ON b.id_kembali = k.id_kembali
JOIN 
    tb_transaksi t ON k.id_transaksi = t.id_transaksi
JOIN 
    tb_member m ON t.nik = m.nik
JOIN 
    tb_mobil mo ON t.nopol = mo.nopol;
";

// Execute query
$result = $koneksi->query($sql);

// Create PDF
$pdf = new FPDF('L', 'mm', 'A4'); // Ubah menjadi landscape
$pdf->AddPage();
$pdf->SetFont("Arial", "", 12);

// Add report title
$pdf->Cell(0, 10, "Laporan Transaksi Penyewaan Mobil", 0, 1, 'C');

// Set column widths
$widths = [
    25, // NIK
    30, // Nama Lengkap
    25, // Mobil Yang Dipinjam
    30, // Type
    30, // Nomor Polisi
    40, // Alamat Pelanggan
    30, // Telp Pelanggan
    30, // Total Pembayaran
    25  // Status
];

// Add table header
$pdf->SetFont("Arial", "B", 8);
$header = ["NIK", "Nama Lengkap", "Brand", "Type", "Nomor Polisi", "Alamat", "Telepon", "Total", "Status"];
foreach ($header as $i => $col) {
    $pdf->Cell($widths[$i], 10, $col, 1, 0, 'C');
}
$pdf->Ln();

// Add table data
$pdf->SetFont("Arial", "", 7);
if ($result && $result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell($widths[0], 10, $row["nik"], 1, 0, 'C');
        $pdf->Cell($widths[1], 10, $row["nama_lengkap"], 1, 0, 'C');
        $pdf->Cell($widths[2], 10, $row["mobil_yang_dipinjam"], 1, 0, 'C');
        $pdf->Cell($widths[3], 10, $row["type"], 1, 0, 'C');
        $pdf->Cell($widths[4], 10, $row["nomor_polisi"], 1, 0, 'C');
        $pdf->Cell($widths[5], 10, $row["alamat_pelanggan"], 1, 0, 'C');
        $pdf->Cell($widths[6], 10, $row["telp_pelanggan"], 1, 0, 'C');
        $pdf->Cell($widths[7], 10, $row["total_pembayaran"], 1, 0, 'C');
        $pdf->Cell($widths[8], 10, $row["status_pembayaran"], 1, 1, 'C');
    }
} else {
    $pdf->Cell(0, 10, "Tidak ada data", 1, 1, 'C');
}

// Close database connection
$koneksi->close();

// Output PDF
$pdf->Output("laporan_transaksi_mobil.pdf", "D");
?>