<div class="content">
			<h1> Inventaris </h1>
			<hr class="hr1">
			<a href="?menu=tambah_inventaris" class="button btn-primary utilities tambah"><i class="fa fa-plus"></i> Tambah Data </a>
			<a href="" class="button btn-success reset utilities"> <i class="fa fa-refresh"> </i> Reset </a>
			<a  class="button btn-cetak ukuran-btn-cetak utilities" title="Cetak"  href="menu/laporan/cetak_inventaris.php" target="blank"> <i class="fa fa-print" aria-hidden="true"> </i> Cetak </a>
			<!-- <a  class="button btn-cetak ukuran-btn-cetak utilities" title="Cetak"  href="menu/laporan/cetak.php" target="blank"> <i class="fa fa-print" aria-hidden="true"> </i> Cetak </a> -->
	<div class="content2">
			<form method="post">
			<input name="inputan" type="text" class="cari" placeholder="Cari Berdasarkan Kode">
			<input name="cari" class="input2" value="Cari" type="submit">
			</form>
	</div>
		</br>


			 <table class="table tiny table-hoverable table-striped table-bordered table-bordered1 table-striped">


				<tr>
					<th class="ukuran-huruf"> No </th>
					<th class="ukuran-huruf"> ID Inventaris </th>
					<th class="ukuran-huruf"> Nama </th>
					<th class="ukuran-huruf"> Kondisi </th>
					<th class="ukuran-huruf"> Keterangan </th>
					<th class="ukuran-huruf"> Jumlah </th>
					<th class="ukuran-huruf"> ID Jenis </th>
					<th class="ukuran-huruf"> tanggal Register </th>
					<th class="ukuran-huruf"> ID Ruang </th>
					<th class="ukuran-huruf"> Kode Inventaris </th>
					<th class="ukuran-huruf"> ID Petugas </th>
					<th class="ukuran-huruf"> Opsi </th>


		</tr>


		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from inventaris");
				}else if ($inputan!="") {
					$query = mysqli_query($koneksi,"select * from inventaris where kode_inventaris like '%$inputan%' ");
				}
			}
			else{
		$query = mysqli_query($koneksi,"select * from inventaris");
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
			<td class="ukuran-huruf1"> <?php echo $no++; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_inventaris'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['nama'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['kondisi'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['keterangan'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['jumlah_inventaris'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_jenis']; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['tanggal_register']; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_ruang']; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['kode_inventaris']; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_petugas']; ?> </td>
			<td>
			<a  class="button btn-danger utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_inventaris&idinventaris=<?php echo $data['id_inventaris']; ?>" title="Hapus"> <i class="fa fa-trash" aria-hidden="true"> </i> Hapus</a>


			<a  class="button btn-warning ukuran-btn-warning utilities" title="Edit" href="?menu=edit_inventaris&idinventaris=<?php echo $data['id_inventaris']; ?>"> <i class="fa fa-pencil" aria-hidden="true"> </i> Edit </a>



		</td>
		</tr>

		<?php
		}}
		?>
</table>
	</div>
