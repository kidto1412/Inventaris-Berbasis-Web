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
			<input type="text" name="id" placeholder="ID Peminjaman">
			Tanggal Pinjam:
			<input type="date" name="tgl_pinjam" placeholder="Tangal Pinjam">
			Tangal Kembali:
			<input type="date" name="tgl_kembali" placeholder="Tanggal Kembali">
			Status Peminjaman:
			<input type="text" name="status" placeholder="Status Peminjaman">
			ID Pegawai:
			<select name="idp">
				<?php
				$query = mysqli_query($koneksi, "select * from pegawai");
				while ($data = mysqli_fetch_array($query)) {
				?>
				<option>
					<?php echo $data['id_pegawai'];?>
					<?php } ?>
				</option>
	</select>
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
				$query="INSERT into peminjaman (id_peminjaman,tanggal_pinjam,tanggal_kembali,status_peminjaman,id_pegawai) values('$id','$tgl_pinjam','$tgl_kembali','$status','$idp') ";
					mysqli_query($koneksi,$query);
					?>
					<script type="text/javascript">
						alert('berhasil disimpan');
						document.location.href="?menu=data_peminjaman";
					</script>
					<?php
			}
		?>
	</form>
	</div>
