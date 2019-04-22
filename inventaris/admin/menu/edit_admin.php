<?php
$id = $_GET['idadmin'];
$query = mysqli_query($koneksi, "select * from admin where id_admin='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>Edit Admin</p>
	</br>
	</br>
</div>
	<div class="div1">
		ID Admin
		<input type="text" name="ida" placeholder="ID Admin" value="<?php echo $data['id_admin'];?>">
		Username:
		<input type="text" name="username" placeholder="Username" value="<?php echo $data['username'];?>">
		Password:
		<input type="password" name="password" placeholder="Password" value="<?php echo $data['password'];?>">
		Nama Admin:
		<input type="text" name="nama" placeholder="Nama Admin" value="<?php echo $data['nama_admin'];?>">
		ID Level:
		<select name="idl">
			<?php
			$query = mysqli_query($koneksi, "select * from admin");
			while ($data = mysqli_fetch_array($query)) {
			?>
			<option>
				<?php echo $data['id_level'];?>
				<?php } ?>
			</option>
</select>
		<input type="submit" name="simpan" value="Simpan">
		<a href="?menu=data_admin" class="button1 btn-gagal">Kembali</a>
	</div>
	<?php
	 $no = 1;
		if (isset($_POST ['simpan'])) {
			$ida = $_POST['ida'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$nama = $_POST['nama'];
			$idl = $_POST['idl'];
			# code...
			$query="UPDATE admin set username='$username', password='$password',nama_admin='$nama',id_level='$idl'  where id_admin='$id' ";
				mysqli_query($koneksi,$query);
				?>
				<script type="text/javascript">
					alert('berhasil di edit');
					document.location.href="?menu=data_admin";
				</script>
				<?php
		}
	?>
</form>
</div>
