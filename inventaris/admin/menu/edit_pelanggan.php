<?php
$id = $_GET['idpelanggan'];
$query = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
	<p>	Edit Pelanggan </p>
	</br>
	</br>
</div>
	<div class="div1">
		ID Pelanggan
		<input type="text" name="pelanggan" placeholder="ID Pelanggan" value="<?php echo $data['id_pelanggan'];?>">
		Username:
		<input type="text" name="username" placeholder="Username" value="<?php echo $data['username'];?>">
		Password:
		<input type="password" name="password" placeholder="Password" value="<?php echo $data['password'];?>">
		Nomor Kwh:
		<input type="text" name="nomor" placeholder="Nomor Kwh" value="<?php echo $data['nomor_kwh'];?>">
		Nama Pelanggan:
		<input type="text" name="nama" placeholder="Nama Pelanggan" value="<?php echo $data['nama_pelanggan'];?>">
		Alamat:
		<input type="text" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat'];?>">
		ID Tarif:
		<input type="text" class="baca" name="tarif" placeholder="ID Tarif" value="<?php echo $data['id_tarif'];?>"readonly>
		<input type="submit" name="simpan" value="Simpan">
		<a href="?menu=data_pelanggan" class="button1 btn-gagal">Kembali</a>
	</div>
	<?php
		if (isset($_POST ['simpan'])) {
			$id = $_POST['pelanggan'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$nomor = $_POST['nomor'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$tarif = $_POST['tarif'];
			# code...
			$query="UPDATE pelanggan set username='$username', password='$password',nomor_kwh='$nomor', nama_pelanggan='$nomor', alamat='$alamat' where id_pelanggan='$id' ";
				mysqli_query($koneksi,$query);
				?>
				<script type="text/javascript">
					alert('berhasil disimpan');
					document.location.href="?menu=data_pelanggan";
				</script>
				<?php
		}
	?>
</form>
</div>
