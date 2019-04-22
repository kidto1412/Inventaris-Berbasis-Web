<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'Aplikasi Inventaris',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Data Inventaris',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'ID Inventaris',1,0);
$pdf->Cell(25,6,'Nama',1,0);
$pdf->Cell(17,6,'Kondisi',1,0);
$pdf->Cell(30,6,'Keterangan',1,0);
$pdf->Cell(20,6,'Jumlah',1,0);
$pdf->Cell(20,6,'ID Jenis',1,0);
$pdf->Cell(30,6,'Tanggal Register',1,0);
$pdf->Cell(20,6,'ID Ruang',1,0);
$pdf->Cell(30,6,'Kode Inventaris',1,0);
$pdf->Cell(30,6,'ID Inventaris',1,0);
$pdf->Cell(30,6,'ID Petugas',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$query = mysqli_query($koneksi, "select * from inventaris");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(25,6,$row['id_inventaris'],1,0);
    $pdf->Cell(25,6,$row['nama'],1,0);
    $pdf->Cell(17,6,$row['kondisi'],1,0);
    $pdf->Cell(30,6,$row['keterangan'],1,0);
    $pdf->Cell(20,6,$row['jumlah_inventaris'],1,0);
    $pdf->Cell(20,6,$row['id_jenis'],1,0);
    $pdf->Cell(30,6,$row['tanggal_register'],1,0);
    $pdf->Cell(20,6,$row['id_ruang'],1,0);
    $pdf->Cell(30,6,$row['kode_inventaris'],1,0);
    $pdf->Cell(30,6,$row['id_inventaris'],1,0);
    $pdf->Cell(30,6,$row['id_petugas'],1,1);

}

$pdf->Output();
?>
