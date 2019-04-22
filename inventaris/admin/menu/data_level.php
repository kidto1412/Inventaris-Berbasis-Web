<div class="content">
			<h1> Data Level </h1>
			<hr class="hr1">
			<a href="?menu=tambah_level" class="button btn-primary utilities tambah"><i class="fa fa-plus"></i> Tambah Level </a>
			<a href="" class="button btn-success reset utilities"> <i class="fa fa-refresh"> </i> Reset </a>
		<a  class="button btn-cetak ukuran-btn-cetak utilities" title="Cetak"  href="menu/laporan/cetak_level.php" target="blank"> <i class="fa fa-print" aria-hidden="true"> </i> Cetak </a>
	<div class="content2">
			<form method="post">
			<input name="inputan" type="text" class="cari" placeholder="Cari Nama Level..">
			<input name="cari" class="input2" value="Cari" type="submit">
			</form>
	</div>
		</br>


			 <table class="table tiny table-hoverable table-striped table-bordered table-striped">


				<tr>
					<th class="ukuran-huruf"> No </th>
					<th class="ukuran-huruf"> ID Level </th>
					<th class="ukuran-huruf"> Nama Level </th>
					<th class="ukuran-huruf"> Opsi </th>


		</tr>


		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from level");
				}else if ($inputan!="") {
					$query = mysqli_query($koneksi,"select * from level where nama_level like '%$inputan%' ");
				}
			}
			else{
		$query = mysqli_query($koneksi,"select * from level");
		}
		$cek = mysqli_num_rows($query);
		if($cek <1 ){
			?>
			<tr>
				<td colspan="2" class="ukuran-huruf1">
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
			<td class="ukuran-huruf1"> <?php echo $data['id_level'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['nama_level'] ; ?> </td>
			<td>
			<a  class="button btn-danger utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_level&idlevel=<?php echo $data['id_level']; ?>" title="Hapus"> <i class="fa fa-trash" aria-hidden="true"> </i> Hapus</a>


			<a  class="button btn-warning ukuran-btn-warning utilities" title="Edit" href="?menu=edit_level&idlevel=<?php echo $data['id_level']; ?>"> <i class="fa fa-pencil" aria-hidden="true"> </i> Edit </a>

<!-- <a  class="button btn-cetak ukuran-btn-cetak utilities" title="Cetak"  href="menu/laporan/cetak.php" target="blank"> <i class="fa fa-print" aria-hidden="true"> </i> Cetak </a> -->

		</td>
		</tr>

		<?php
		}}
		?>
</table>
	</div>
