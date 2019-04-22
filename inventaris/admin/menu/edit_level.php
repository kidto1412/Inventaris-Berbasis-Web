<?php
$id = $_GET['idlevel'];
$query = mysqli_query($koneksi, "select * from level where id_level='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>
				Edit Level
			</p>

		</br>
		</br>
		</div>
		<div class="div1">

			ID Level:
			<input type="text" name="id" placeholder="ID Level" value="<?php echo $data['id_level']; ?>">
			Nama level:
			<input type="text" name="nama" placeholder="Nama Level" value="<?php echo $data['nama_level']; ?>">


			<input type="submit" name="simpan" value="Simpan">
			<a href="?menu=data_level" class="button1 btn-gagal">Kembali</a>
		</div>
		<?php
			if (isset($_POST ['simpan'])) {
				$id = $_POST['id'];
				$nama = $_POST['nama'];
				# code...
				$query="INSERT into level (id_level,nama_level) values('$id','$nama') ";
					mysqli_query($koneksi,$query);
					?>
					<script type="text/javascript">
						alert('berhasil disimpan');
						document.location.href="?menu=data_level";
					</script>
					<?php
			}
		?>
	</form>
	</div>
