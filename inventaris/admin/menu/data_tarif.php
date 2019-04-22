<div class="content">
			<h1> Tarif </h1>
			<hr class="hr1">

<a href="?menu=tambah_tarif" class="button btn-primary utilities tambah"><i class="fa fa-plus"></i> Tambah Data </a>
			<a href="" class="button btn-success reset utilities"> <i class="fa fa-refresh"></i> Reset </a>
	<div class="content2">
			<form method="post">
			<input name="inputan" type="text" class="cari" placeholder="Cari Pegawai..">
			<input name="cari" class="input2" value="Cari" type="submit">
			</form>
	</div>
		</br>

	 <table class="table-hoverable table-bordered">
				<tr>

					<th> No</th>
					<th> ID Tarif</th>
					<th> Daya </th>
					<th> Tarif Perkwh </th>
					<th> Opsi</th>
				</tr>


		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from tarif");
				}else if ($inputan!="") {
					$query = mysqli_query($koneksi,"select * from tarif where id_tarif like '%$inputan%' ");
				}
			}
			else{
		$query = mysqli_query($koneksi,"select * from tarif");
		}
		$cek = mysqli_num_rows($query);
		if($cek <1 ){
			?>
			<tr>
				<td colspan="8" class="ukuran-huruf1">
					data yang anda cari tidak tersedia
					<a href="" class="button btn-success utilities"><i class="fa fa-refresh"></i> Refresh</a>
				 </td>
			</tr>
			<?php
		}else{
		while ($data = mysqli_fetch_array($query)) {

		?>
		<tr>
			<td> <?php echo $no++; ?> </td>
			<td> <?php echo $data['id_tarif'] ; ?> </td>
			<td> <?php echo $data['daya'] ; ?> </td>
			<td> <?php echo $data['tarifperkwh'] ; ?> </td>
			<td>
			<a class="button btn-danger ukuran-btn-danger1 utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_tarif&idtarif=<?php echo $data['id_tarif']; ?>" title="Hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> Hapus </a>
			<a class="button btn-warning ukuran-btn-warning1 utilities" title="Edit" href="?menu=edit_tarif&idtarif=<?php echo $data['id_tarif']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Edit </a>

		</td>
		</tr>

		<?php
		}}
		?>
		</table>
	</div>
