<?php
$id = $_GET['idpetugas'];
$query = mysqli_query($koneksi, "select * from petugas where id_petugas='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>Edit Petugas</p>
	</br>
	</br>
</div>
	<div class="div1">
		ID Petugas
		<input type="text" name="idp" placeholder="ID Petugas" value="<?php echo $data['id_petugas'];?>" readonly class="baca">
		Username:
		<input type="text" name="username" placeholder="Username" value="<?php echo $data['username'];?>">
		Password:
		<input type="password" name="password" placeholder="Password" value="<?php echo $data['password'];?>">
		Nama Petugas:
		<input type="text" name="nama" placeholder="Nama Petugas" value="<?php echo $data['nama_petugas'];?>">
		ID Level:
		<select name="idl">
			<?php
			$query = mysqli_query($koneksi, "select * from petugas");
			while ($data = mysqli_fetch_array($query)) {
			?>
			<option>
				<?php echo $data['id_level'];?>
				<?php } ?>
			</option>
</select>
		<input type="submit" name="simpan" value="Simpan">
		<a href="?menu=data_petugas" class="button1 btn-gagal">Kembali</a>
	</div>
	<?php
	 $no = 1;
		if (isset($_POST ['simpan'])) {
			$idp = $_POST['idp'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$nama = $_POST['nama'];
			$idl = $_POST['idl'];
			# code...
			$query="UPDATE petugas set username='$username', password='$password',nama_petugas='$nama',id_level='$idl' where id_petugas='$id' ";
				mysqli_query($koneksi,$query);
				?>
				<script type="text/javascript">
					alert('berhasil di edit');
					document.location.href="?menu=data_petugas";
				</script>
				<?php
		}
	?>
</form>
</div>
