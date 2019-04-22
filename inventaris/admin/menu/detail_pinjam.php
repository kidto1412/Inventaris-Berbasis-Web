<div class="content">
			<h1> Detail Pinjam </h1>
			<hr class="hr1">
					<a  class="button btn-primary ukuran-btn-cetak utilities" title="Pinjam" href="?menu=pinjam&iddetail=<?php echo $data['id_detail_pinjam']; ?>"> <i class="fa fa-money" aria-hidden="true"> </i> Pinjam </a>
			<!-- <a href="?menu=tambah_detail" class="button btn-primary utilities tambah"><i class="fa fa-plus"></i> Tambah Detail </a> -->
			<a href="" class="button btn-success reset utilities"> <i class="fa fa-refresh"> </i> Reset </a>
			<a  class="button btn-cetak ukuran-btn-cetak utilities" title="Cetak"  href="menu/laporan/cetak_pinjaman.php" target="blank"> <i class="fa fa-print" aria-hidden="true"> </i> Cetak </a>


	<div class="content2">
			<form method="post">
			<input name="inputan" type="text" class="cari" placeholder="Cari ID Detail Pinjam..">
			<input name="cari" class="input2" value="Cari" type="submit">
			</form>
	</div>
		</br>


			 <table class="table tiny table-hoverable table-striped table-bordered table-striped">


				<tr>
					<th class="ukuran-huruf"> No </th>
					<th class="ukuran-huruf"> ID Detail Pinjam </th>
					<th class="ukuran-huruf"> ID Inventaris </th>
					<th class="ukuran-huruf"> ID Peminjaman </th>
					<th class="ukuran-huruf"> Jumlah Pinjam </th>
					<th class="ukuran-huruf"> Jumlah Inventaris </th>
					<th class="ukuran-huruf"> Stok Jumlah Pinjam </th>
					<th class="ukuran-huruf"> Opsi </th>


		</tr>


		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from detail_pinjam");
				}else if ($inputan!="") {
					$query = mysqli_query($koneksi,"select * from detail_pinjam where id_detail_pinjam like '%$inputan%' ");
				}
			}
			else{
		$query = mysqli_query($koneksi,"SELECT * FROM inventaris INNER JOIN detail_pinjam ON inventaris.id_inventaris = detail_pinjam.id_inventaris");
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
			$total = $data['jumlah_inventaris'] - $data['jumlah'];
		?>
		<tr>
			<td class="ukuran-huruf1"> <?php echo $no++; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_detail_pinjam'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_inventaris'] ; ?> </td>
			<td total="ukuran-huruf1"> <?php echo $data['id_peminjaman'] ; ?> </td>
				<td total="ukuran-huruf1"> <?php echo $data['jumlah'] ; ?> </td>
				<td total="ukuran-huruf1"> <?php echo $data['jumlah_inventaris'] ; ?> </td>

			<td class="ukuran-huruf1"> <?php echo $total ; ?> </td>
			<td>
			<a  class="button btn-danger utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_detail&iddetail=<?php echo $data['id_detail_pinjam']; ?>" title="Hapus"> <i class="fa fa-trash" aria-hidden="true"> </i> Hapus</a>


			<a  class="button btn-warning ukuran-btn-warning utilities" title="Edit" href="?menu=edit_detail&iddetail=<?php echo $data['id_detail_pinjam']; ?>"> <i class="fa fa-pencil" aria-hidden="true"> </i> Edit </a>





		</td>
		</tr>

		<?php
		}}
		?>
</table>
	</div>
