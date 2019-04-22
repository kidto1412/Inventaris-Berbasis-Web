<?php
$id = $_GET['idinventaris'];
$query = mysqli_query($koneksi, "select * from inventaris where id_inventaris='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>
				Tambah Inventaris
			</p>

		</br>
		</br>
		</div>
		<div class="div1">

			ID Inventaris:
			<input type="text" name="id_inventaris" placeholder="ID Inventaris" value="<?php echo $data['id_inventaris']; ?>" class="baca" readonly>
			Nama:
			<input type="text" name="nama" placeholder="Nama" value="<?php echo $data['nama']; ?>">
			Kondisi:
			<input type="text" name="kondisi" placeholder="Kondisi" value="<?php echo $data['kondisi']; ?>">
			Keterangan:
			<input type="text" name="keterangan" placeholder="Keterangan" value="<?php echo $data['keterangan']; ?>">
			Jumlah:
			<input type="text" name="jumlah" placeholder="Jumlah" value="<?php echo $data['jumlah_inventaris']; ?>">
			ID Jenis:
			<input type="text" name="id_jenis" value="<?php echo $data['id_jenis']; ?>" readonly class="baca">
	Tanggal Register:
		<input type="date" name="tanggal" value="<?php echo $data['tanggal_register']; ?>">

		ID Ruang:
		<input type="text" name="id_ruang" value="<?php echo $data['id_ruang']; ?>" readonly class="baca">

		Kode Inventaris:
			<input type="text" name="kode"  value="<?php echo $data['kode_inventaris']; ?>">

			ID Petugas:
			<input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" readonly class="baca">


			<input type="submit" name="simpan" value="Simpan">
			<a href="?menu=data_inventaris" class="button1 btn-gagal">Kembali</a>
		</div>
		<?php
			if (isset($_POST ['simpan'])) {
				$id_inventaris = $_POST['id_inventaris'];
				$nama = $_POST['nama'];
				$kondisi = $_POST['kondisi'];
				$keterangan = $_POST['keterangan'];
				$jumlah = $_POST['jumlah'];
				$id_jenis = $_POST['id_jenis'];
				$tanggal = $_POST['tanggal'];
				$id_ruang = $_POST['id_ruang'];
				$kode = $_POST['kode'];
				$id_petugas = $_POST['id_petugas'];
				# code...
				$query="UPDATE inventaris set nama='$nama',kondisi='$kondisi',keterangan='$keterangan', jumlah_inventaris='$jumlah', id_jenis='$id_jenis', tanggal_register='$tanggal',id_ruang='$id_ruang',kode_inventaris='$kode', id_petugas='$id_petugas' where id_inventaris='$id_inventaris'";
					mysqli_query($koneksi,$query);
					?>
					<script type="text/javascript">
						alert('berhasil disimpan');
						document.location.href="?menu=data_inventaris";
					</script>
					<?php
			}
		?>
	</form>
	</div>
