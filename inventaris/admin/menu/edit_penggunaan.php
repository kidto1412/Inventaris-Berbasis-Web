<?php
$id = $_GET['idpenggunaan'];
$query = mysqli_query($koneksi, "select * from penggunaan where id_penggunaan='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>Edit Penggunaan</p>

	</br>
	</br>
	</div>
	<div class="div1">

		ID Penggunaan
		<input type="text" name="id_penggunaan" placeholder="ID Penggunaan" value="<?php echo $data['id_penggunaan'];?>">
		ID Pelanggan:
		<input type="text" name="id_pelanggan" placeholder="ID Pelanggan" value="<?php echo $data['id_pelanggan'];?>"readonly class="baca">
		Bulan:
		<input type="text" name="bulan" placeholder="Bulan" value="<?php echo $data['bulan'];?>">
		Tahun:
		<input type="text" name="tahun" placeholder="Tahun" value="<?php echo $data['tahun'];?>">
		Meter Awal:
		<input type="text" name="meter_awal" placeholder="Meter Awal" value="<?php echo $data['meter_awal'];?>">
		Meter Akhir:
		<input type="text" name="meter_akhir" placeholder="Meter Akhir" value="<?php echo $data['meter_akhir'];?>">
		<input type="submit" name="simpan" value="Simpan">
		<a href="?menu=data_pelanggan" class="button1 btn-gagal">Kembali</a>
	</div>
	<?php
		if (isset($_POST ['simpan'])) {
			$id_penggunaan = $_POST['id_penggunaan'];
			// $id_pelanggan = $_POST['id_pelanggan'];
			$bulan = $_POST['bulan'];
			$tahun = $_POST['tahun'];
			$meter_awal = $_POST['meter_awal'];
			$meter_akhir = $_POST['meter_akhir'];
			# code...
			$query="UPDATE penggunaan set bulan='$bulan', tahun='$tahun',meter_awal='$meter_awal', meter_akhir='$meter_akhir' where id_penggunaan='$id_penggunaan' ";
				mysqli_query($koneksi,$query);
				?>
				<script type="text/javascript">
					alert('berhasil disimpan');
					document.location.href="?menu=data_penggunaan";
				</script>
				<?php
		}
	?>
</form>
</div>
