<?php
$id = $_GET['idtarif'];
$query = mysqli_query($koneksi, "select * from tarif where id_tarif='$id'");
$data = mysqli_fetch_array($query);
?>
<form method="post">
	<div class="content">
		<div class="panel-heading">
		<p>Edit Tarif</p>

	</br>
	</br>
	</div>
	<div class="div1">

		ID Tarif :
		<input type="text" name="id_tarif" placeholder="ID Tarif" value="<?php echo $data['id_tarif'];?>">
		Daya :
		<input type="text" name="daya" placeholder="Daya" value="<?php echo $data['daya'];?>">
		Tarif Perkwh:
		<input type="text" name="tarif" placeholder="Tarif Perkwh" value="<?php echo $data['tarifperkwh'];?>">
		<input type="submit" name="simpan" value="Simpan">
		<a href="?menu=data_tarif" class="button1 btn-gagal">Kembali</a>
	</div>
	<?php
		if (isset($_POST ['simpan'])) {
			$id_tarif = $_POST['id_tarif'];
			$daya = $_POST['daya'];
			$tarif = $_POST['tarif'];
			# code...
			$query="UPDATE tarif set daya='$daya', tarifperkwh='$tarif' where id_tarif='$id_tarif'";
				mysqli_query($koneksi,$query);
				?>
				<script type="text/javascript">
					alert('berhasil disimpan');
					document.location.href="?menu=data_tarif";
				</script>
				<?php
		}
	?>
</form>
</div>
