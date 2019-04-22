<div class="content">
			<h1> Penggunaan </h1>
			<hr class="hr1">
			
<a href="?menu=tambah_penggunaan" class="button btn-primary utilities tambah"><i class="fa fa-plus"></i> Tambah Data </a>
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
					<th> ID Penggunaan</th>
					<th> ID Pelanggan </th>
					<th> Bulan </th>
					<th> Tahun </th>
					<th> Meter Awal </th>
					<th> Meter Akhir </th>
					<th> Opsi</th>
				</tr>

				
		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from penggunaan");
				}else if ($inputan!="") {
					$query = mysqli_query($koneksi,"select * from penggunaan where id_penggunaan like '%$inputan%' ");
				}
			}
			else{
		$query = mysqli_query($koneksi,"select * from penggunaan");
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
			<td> <?php echo $data['id_penggunaan'] ; ?> </td>
			<td> <?php echo $data['id_pelanggan'] ; ?> </td>
			<td> <?php echo $data['bulan'] ; ?> </td>
			<td> <?php echo $data['tahun'] ; ?> </td>
			<td> <?php echo $data['meter_awal'] ; ?> </td>
			<td> <?php echo $data['meter_akhir'] ; ?> </td>
			
			
			<td>
			<a class="button btn-danger ukuran-btn-danger1 utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_penggunaan&idpenggunaan=<?php echo $data['id_penggunaan']; ?>" title="Hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> Hapus </a>
			<a class="button btn-warning ukuran-btn-warning1 utilities" title="Edit" href="?menu=edit_penggunaan&idpenggunaan=<?php echo $data['id_penggunaan']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Edit </a>

		</td>
		</tr>
		
		<?php
		}}
		?>
		</table>
	</div>
