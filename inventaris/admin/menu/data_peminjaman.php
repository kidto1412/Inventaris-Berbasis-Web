<div class="content">
			<h1> Peminjaman </h1>
			<hr class="hr1">
			<a href="?menu=tambah_peminjaman" class="button btn-primary utilities tambah"><i class="fa fa-plus"></i> Tambah Pinjam </a>
			<a href="" class="button btn-success reset utilities"> <i class="fa fa-refresh"> </i> Reset </a>
			<!-- <a  class="button btn-cetak ukuran-btn-cetak utilities" title="Cetak"  href="menu/laporan/cetak.php" target="blank"> <i class="fa fa-print" aria-hidden="true"> </i> Cetak </a> -->
	<div class="content2">
			<form method="post">
			<input name="inputan" type="text" class="cari" placeholder="Cari ID Pinjam">
			<input name="cari" class="input2" value="Cari" type="submit">
			</form>
	</div>
		</br>


			 <table class="table tiny table-hoverable table-striped table-bordered table-striped">


				<tr>
					<th class="ukuran-huruf"> No </th>
					<th class="ukuran-huruf"> ID Peminjaman </th>
					<th class="ukuran-huruf"> Tanggal Pinjam </th>
					<th class="ukuran-huruf"> Tanggal Kembali </th>
					<th class="ukuran-huruf"> Status Peminjaman </th>
					<th class="ukuran-huruf"> ID Pegawai </th>
					<th class="ukuran-huruf"> Opsi </th>


		</tr>


		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from peminjaman");
				}else if ($inputan!="") {
					$query = mysqli_query($koneksi,"select * from peminjaman where id_peminjaman like '%$inputan%' ");
				}
			}
			else{
		$query = mysqli_query($koneksi,"select * from peminjaman");
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
			<td class="ukuran-huruf1"> <?php echo $data['id_peminjaman'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['tanggal_pinjam'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['tanggal_kembali'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['status_peminjaman'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_pegawai'] ; ?> </td>
			<td>
			<!-- <a  class="button btn-success ukuran-btn-pinjam utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_petugas&idpetugas=<?php echo $data['id_petugas']; ?>" title="Hapus"> <i class="fa fa-buysellads" aria-hidden="true"> </i> Pinjam Detail</a>
			 -->
			<a  class="button btn-danger ukuran-btn-warning utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_peminjaman&idpeminjaman=<?php echo $data['id_peminjaman']; ?>" title="Hapus"> <i class="fa fa-trash" aria-hidden="true"> </i> Hapus</a>

			<a  class="button btn-warning ukuran-btn-warning utilities" title="Edit" href="?menu=edit_peminjaman&idpeminjaman=<?php echo $data['id_peminjaman']; ?>"> <i class="fa fa-pencil" aria-hidden="true"> </i> Edit </a>


			<!-- <a  class="button btn-primary ukuran-btn-warning ukuran-btn-pinjam utilities" title="Edit" href="?menu=edit_petugas&idpetugas=<?php echo $data['id_petugas']; ?>"> <i class="fa  fa-backward" aria-hidden="true"> </i> Pengembalian </a> -->



		</td>
		</tr>

		<?php
		}}
		?>
</table>
	</div>
