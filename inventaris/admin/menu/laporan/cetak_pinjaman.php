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
$pdf->Cell(190,7,'Data Pinjaman',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'ID Detail Pinjam',1,0);
$pdf->Cell(55,6,'ID Inventaris',1,0);
$pdf->Cell(27,6,'ID Peminjaman',1,0);
$pdf->Cell(30,6,'Jumlah Pinjam',1,0);
$pdf->Cell(35,6,'jumlah_inventaris',1,1);


$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM inventaris INNER JOIN detail_pinjam ON inventaris.id_inventaris = detail_pinjam.id_inventaris");
while ($row = mysqli_fetch_array($query)){
  // $total = $row['jumlah_inventaris'] - $row['jumlah'];
    $pdf->Cell(50,6,$row['id_detail_pinjam'],1,0);
    $pdf->Cell(55,6,$row['id_inventaris'],1,0);
    $pdf->Cell(27,6,$row['id_peminjaman'],1,0);
    $pdf->Cell(30,6,$row['jumlah'],1,0);
    $pdf->Cell(35,6,$row['jumlah_inventaris'],1,1);
    // $pdf->Cell(27,6,$row['total'],1,1);
}

$pdf->Output();
?>
