<?php
$id = $_GET['idjenis'];
$query = mysqli_query($koneksi, "select * from jenis where id_jenis='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>
				Edit Jenis
			</p>

		</br>
		</br>
		</div>
		<div class="div1">

			ID Jenis:
			<input type="text" name="id" placeholder="ID Jenis" value="<?php echo $data['id_jenis'] ?>" readonly class="baca">
			Nama jenis:
			<input type="text" name="nama" placeholder="Nama Jenis" value="<?php echo $data['nama_jenis'] ?>">
			Kode Jenis:
			<input type="text" name="kode" placeholder="Kode Jenis" value="<?php echo $data['kode_jenis'] ?>">
			Keterangan:
			<input type="text" name="keterangan" placeholder="Keterangan" value="<?php echo $data['keterangan'] ?>">

			<input type="submit" name="simpan" value="Simpan">
			<a href="?menu=data_jenis" class="button1 btn-gagal">Kembali</a>
		</div>
		<?php
			if (isset($_POST ['simpan'])) {
				$id = $_POST['id'];
				$nama = $_POST['nama'];
				$kode = $_POST['kode'];
				$keterangan = $_POST['keterangan'];
				# code...
				$query="UPDATE jenis set nama_jenis='$nama', kode_jenis='$kode',keterangan='$keterangan' where id_jenis='$id' ";
					mysqli_query($koneksi,$query);
					?>
					<script type="text/javascript">
						alert('berhasil disimpan');
						document.location.href="?menu=data_jenis";
					</script>
					<?php
			}
		?>
	</form>
	</div>
