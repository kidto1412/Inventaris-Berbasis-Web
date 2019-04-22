<?php
$id = $_GET['id_pegawai'];
$query = mysqli_query($koneksi, "select * from pegawai where id_pegawai='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>	Edit Pegawai </p>
	</br>
	</br>
	</div>
	<div class="div1">

		ID Pegawai :
		<input type="text" name="id" placeholder="ID Pegawai" value="<?php echo $data['id_pegawai'];?>" readonly class="baca">
		Nama Pegawai :
		<input type="text" name="nama" placeholder="Nama Pegawai" value="<?php echo $data['nama_pegawai'];?>">
		NIP:
		<input type="text" name="nip" placeholder="NIP" value="<?php echo $data['nip'];?>">
		Alamat:
		<input type="text" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat'];?>">
		<input type="submit" name="simpan" value="Simpan">
		<a href="?menu=data_pegawai" class="button1 btn-gagal">Kembali</a>
	</div>
	<?php
		if (isset($_POST ['simpan'])) {
			$id = $_POST['id'];
			$nama = $_POST['nama'];
			$nip = $_POST['nip'];
			$alamat = $_POST['alamat'];
			# code...
			$query="UPDATE pegawai set nama_pegawai='$nama', nip='$nip', alamat='$alamat' where id_pegawai='$id'";
				mysqli_query($koneksi,$query);
				?>
				<script type="text/javascript">
					alert('berhasil di edit');
					document.location.href="?menu=data_pegawai";
				</script>
				<?php
		}
	?>
</form>
</div>
