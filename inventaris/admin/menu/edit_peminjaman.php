<?php
$id = $_GET['idpeminjaman'];
$query = mysqli_query($koneksi, "select * from peminjaman where id_peminjaman='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>
				Tambah Peminjaman
			</p>

		</br>
		</br>
		</div>
		<div class="div1">

			ID Peminjaman:
			<input type="text" name="id" placeholder="ID Peminjaman" value="<?php echo $data['id_peminjaman']; ?>" readonly class="baca">
			Tanggal Pinjam:
			<input type="date" name="tgl_pinjam" placeholder="Tangal Pinjam" value="<?php echo $data['tanggal_pinjam'];  ?>">
			Tangal Kembali:
			<input type="date" name="tgl_kembali" placeholder="Tanggal Kembali" value="<?php echo $data['tanggal_kembali'];?>">
			Status Peminjaman:
			<input type="text" name="status" placeholder="Status Peminjaman" value="<?php echo $data['status_peminjaman']; ?>">
			ID Pegawai:
			<input type="text" name="idp" value="<?php echo $data['id_pegawai']; ?>" readonly class="baca">
			<input type="submit" name="simpan" value="Simpan">
			<a href="?menu=data_petugas" class="button1 btn-gagal">Kembali</a>
		</div>
		<?php
			if (isset($_POST ['simpan'])) {
				$id = $_POST['id'];  //id peminjaman
				$tgl_pinjam = $_POST['tgl_pinjam'];
				$tgl_kembali = $_POST['tgl_kembali'];
				$status = $_POST['status'];
				$idp = $_POST['idp'];
				# code...
				$query="UPDATE peminjaman set tanggal_pinjam='$tgl_pinjam',tanggal_kembali='$tgl_kembali',status_peminjaman='$status' where id_peminjaman='$id' ";
					mysqli_query($koneksi,$query);
					?>
					<script type="text/javascript">
						alert('berhasil Di edit');
						document.location.href="?menu=data_peminjaman";
					</script>
					<?php
			}
		?>
	</form>
	</div>
