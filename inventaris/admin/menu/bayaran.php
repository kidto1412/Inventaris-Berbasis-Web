<?php
$id = $_GET['id_tagihan'];
$query = mysqli_query($koneksi, "select * from tagihan where id_tagihan='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<!-- <div class="panel-heading"> -->
		<h1> Form Bayar </h1>
		<!-- </div> -->
	<div class="div2">

		ID Tagihan
			<input type="text" name="id_tagihan" placeholder="ID Tagihan" value="<?php echo $data['id_tagihan'];?>">
			ID Penggunaan
			<input type="text" name="id_tagihan" readonly class="baca" value="<?php echo $data['id_penggunaan'];?>">

			ID Pelanggan
			<input type="text" name="id_pelanggan" readonly class="baca" value="<?php echo $data['id_pelanggan'];?>">

Bulan Bayar:
		<input type="Text" name="tanggal_bayar" placeholder="Tanggal Bayar" value="<?php echo $data['bulan'];?>" readonly class="baca">
		Tahun Bayar:
		<input type="text" name="bulan" placeholder="Bulan Bayar" value="<?php echo $data['tahun'];?>">
		<!-- Biaya Admin: -->
		<!-- <input type="text" name="biaya_admin" placeholder="Biaya Admin" value="<?php echo $data['biaya_admin'];?>"> -->
		Jumlah Meter:
		<input type="text" name="total" placeholder="Total bayar" value="<?php echo $data['jumlah_meter'];?>">

		Status:
		<input type="text" name="total" placeholder="Total bayar" value="<?php echo $data['status'];?>" readonly class="baca">

		<!-- ID Admin
		<select name="id_admin">
			<?php
			$query = mysqli_query($koneksi, "select * from admin");
			while ($data = mysqli_fetch_array($query)) {
			?>
			<option>
				<?php echo $data['id_admin'];?>
				<?php } ?>
			</option>
		</select> -->
		<input type="submit" name="simpan" value="Proses">
		<a href="?menu=data_tagihan" class="button1 btn-gagal">Kembali</a>
	</div>
	<?php
		if (isset($_POST ['simpan'])) {
			$id_pembayaran = $_POST['id_pembayaran'];
			$id_tagihan = $_POST['id_tagihan'];
			$id_pelanggan = $_POST['id_pelanggan'];
			$tanggal_bayar = $_POST['tanggal_bayar'];
			$bulan = $_POST['bulan'];
			$biaya_admin = $_POST['biaya_admin'];
			$total = $_POST['total'];
			$id_admin = $_POST['id_admin'];
			# code...
			$query="UPDATE pembayaran set tanggal_bayar='$tanggal_bayar', bulan_bayar='$bulan',biaya_admin = '$biaya_admin',total_bayar = '$total'  where id_pembayaran='$id_pembayaran'";
				mysqli_query($koneksi,$query);
				?>
				<script type="text/javascript">
					alert('berhasil disimpan');
					document.location.href="?menu=data_pembayaran";
				</script>
				<?php
		}
	?>
</form>
</div>
