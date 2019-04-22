<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'Aplikasi Inventaris',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Data Pegawai',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'ID Pegawai',1,0);
$pdf->Cell(75,6,'Nama Pegawai',1,0);
$pdf->Cell(47,6,'Nip',1,0);
$pdf->Cell(40,6,'Alamat',1,1);


$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$query = mysqli_query($koneksi, "select * from pegawai");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30,6,$row['id_pegawai'],1,0);
    $pdf->Cell(75,6,$row['nama_pegawai'],1,0);
    $pdf->Cell(47,6,$row['nip'],1,0);
    $pdf->Cell(40,6,$row['alamat'],1,1);

}

$pdf->Output();
?>
