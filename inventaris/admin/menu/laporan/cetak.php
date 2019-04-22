<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage(' ');
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'Aplikasi Inventaris',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Data Petugas',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'id_petugas',1,0);
$pdf->Cell(55,6,'username',1,0);
$pdf->Cell(27,6,'password',1,0);
$pdf->Cell(30,6,'Nama Petugas',1,0);
$pdf->Cell(30,6,'Nama Level',1,0);
$pdf->Cell(27,6,'ID Level',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$query = mysqli_query($koneksi, "select * from petugas inner join level on petugas.id_level=level.id_level");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(20,6,$row['id_petugas'],1,0);
    $pdf->Cell(55,6,$row['username'],1,0);
    $pdf->Cell(27,6,$row['password'],1,0);
    $pdf->Cell(30,6,$row['nama_petugas'],1,0);
    $pdf->Cell(30,6,$row['nama_level'],1,0);
    $pdf->Cell(27,6,$row['id_level'],1,1);
}

$pdf->Output();
?>
