<?php
require_once('../../tcpdf/tcpdf.php');
include '../../class_db.php';

$db = new database();

class PDF extends TCPDF {
    public function Header() {
        // Set header information if needed
    }

    public function Footer() {
        // Set footer information if needed
    }
}

$pdf = new PDF();
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->AddPage();


// Fetch data based on date
$tanggal = date('Y-m-d'); // Replace this with your desired date or get it from the user input
$sql = "SELECT r.kode, a.nama AS Nama_Anggota, s.nomor_simpan AS nomor_simpan, s.simpanan, s.tanggal_simpan AS tanggal_simpan,
                p.nomor_pinjam AS nomor_pinjam, p.pinjaman, p.tanggal_pinjaman
                FROM report r
                JOIN anggota a ON r.id_anggota = a.id
                JOIN simpan s ON r.nomor_simpan = s.nomor_simpan
                JOIN pinjam p ON r.nomor_pinjam = p.nomor_pinjam
                WHERE s.tanggal_simpan = '$tanggal' OR p.tanggal_pinjaman = '$tanggal'
                ORDER BY r.kode DESC";

$data = $db->fetchdata($sql);
$i = 0;

foreach ($data as $dat) {
    $i++;
    $pdf->Cell(10, 10, $i, 1, 0, 'C');
    $pdf->Cell(20, 10, $dat['kode'], 1, 0, 'C');
    $pdf->Cell(40, 10, $dat['Nama_Anggota'], 1, 0, 'L');
    $pdf->Cell(25, 10, $dat['nomor_simpan'], 1, 0, 'C');
    $pdf->Cell(40, 10, 'Rp ' . number_format($dat['simpanan'], 0, ',', '.'), 1, 0, 'R');
    $pdf->Cell(30, 10, $dat['tanggal_simpan'], 1, 0, 'C');
    $pdf->Cell(25, 10, $dat['nomor_pinjam'], 1, 0, 'C');
    $pdf->Cell(40, 10, 'Rp ' . number_format($dat['pinjaman'], 0, ',', '.'), 1, 0, 'R');
    $pdf->Cell(30, 10, $dat['tanggal_pinjaman'], 1, 1, 'C');
}

// Output PDF
$pdf->Output('cetakMenurutTanggal.pdf', 'I');
?>
