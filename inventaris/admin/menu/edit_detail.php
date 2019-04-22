<?php
$id = $_GET['iddetail'];
$query = mysqli_query($koneksi, "select * from detail_pinjam where id_detail_pinjam='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>
				Edit Detail
			</p>

		</br>
		</br>
		</div>
		<div class="div1">

			ID Detail
			<input type="text" name="id_detail" placeholder="ID Detail" value="<?php echo $data['id_detail_pinjam']; ?>" readonly class="baca">
			ID Inventaris
			<input type="text" name="id_inventaris" placeholder="ID Detail" value="<?php echo $data['id_inventaris']; ?>" readonly class="baca">
			ID Peminjaman
			<input type="text" name="id_peminjaman" placeholder="ID Detail" value="<?php echo $data['id_peminjaman']; ?>" readonly class="baca">
jumlah:
<input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>">
			<input type="submit" name="simpan" value="Simpan">
			<a href="?menu=data_petugas" class="button1 btn-gagal">Kembali</a>
		</div>
		<?php
			if (isset($_POST ['simpan'])) {
				$id_detail = $_POST['id_detail'];
				$id_inventaris = $_POST['id_inventaris'];
				$id_peminjaman = $_POST['id_peminjaman'];
				$jumlah = $_POST['jumlah'];
				# code...
				$query="UPDATE detail_pinjam set jumlah='$jumlah' where id_detail_pinjam='$id_detail' ";
					mysqli_query($koneksi,$query);
					?>
					<script type="text/javascript">
						alert('berhasil diedit');
						document.location.href="?menu=detail_pinjam";
					</script>
					<?php
			}
		?>
	</form>
	</div>
