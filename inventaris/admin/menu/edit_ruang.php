<?php
$id = $_GET['idruang'];
$query = mysqli_query($koneksi, "select * from ruang where id_ruang='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>
				Edit Ruang
			</p>

		</br>
		</br>
		</div>
		<div class="div1">

			ID Jenis:
			<input type="text" name="id" placeholder="ID Jenis" value="<?php echo $data['id_ruang'] ?>" readonly class="baca">
			Nama jenis:
			<input type="text" name="nama" placeholder="Nama Jenis" value="<?php echo $data['nama_ruang'] ?>">
			Kode Jenis:
			<input type="text" name="kode" placeholder="Kode Jenis" value="<?php echo $data['kode_ruang'] ?>">
			Keterangan:
			<input type="text" name="keterangan" placeholder="Keterangan" value="<?php echo $data['keterangan'] ?>">

			<input type="submit" name="simpan" value="Simpan">
			<a href="?menu=data_ruang" class="button1 btn-gagal">Kembali</a>
		</div>
		<?php
			if (isset($_POST ['simpan'])) {
				$id = $_POST['id'];
				$nama = $_POST['nama'];
				$kode = $_POST['kode'];
				$keterangan = $_POST['keterangan'];
				# code...
				$query="UPDATE ruang set nama_ruang='$nama', kode_ruang='$kode',keterangan='$keterangan' where id_ruang='$id' ";
					mysqli_query($koneksi,$query);
					?>
					<script type="text/javascript">
						alert('berhasil disimpan');
						document.location.href="?menu=data_ruang";
					</script>
					<?php
			}
		?>
	</form>
	</div>
