<div class="content">
			<h1> Pembayaran </h1>
			<hr class="hr1">
			<a href="?menu=tambah_pembayaran" class="button btn-primary utilities tambah"><i class="fa fa-plus"></i> Tambah Data </a>
			<a href="" class="button btn-success reset utilities"> <i class="fa fa-refresh"> </i> Reset </a>
	<div class="content2">
			<form method="post">
			<input name="inputan" type="text" class="cari" placeholder="Cari Pegawai..">
			<input name="cari" class="input2" value="Cari" type="submit">
			</form>
	</div>
		</br>


			 <table class="table tiny table-hoverable table-striped table-bordered table-striped">


				<tr>
					<th class="ukuran-huruf"> No </th>
					<th class="ukuran-huruf"> ID Pembayaran </th>
					<th class="ukuran-huruf"> ID Tagihan </th>
					<th class="ukuran-huruf"> Id Pelanggan </th>
					<th class="ukuran-huruf"> Tanggal Bayar </th>
					<th class="ukuran-huruf"> Bulan Bayar </th>
					<th class="ukuran-huruf"> Biaya Admin </th>
					<th class="ukuran-huruf"> Total Bayar </th>
					<th class="ukuran-huruf"> ID Admin </th>
					<th class="ukuran-huruf"> Opsi </th>


		</tr>


		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from pembayaran");
				}else if ($inputan!="") {
					$query = mysqli_query($koneksi,"select * from pembayaran where id_pembayaran like '%$inputan%' ");
				}
			}
			else{
		$query = mysqli_query($koneksi,"select * from pembayaran");
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
			<td class="ukuran-huruf1"> <?php echo $data['id_pembayaran'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_tagihan'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_pelanggan'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['tanggal_bayar'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['bulan_bayar'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['biaya_admin']; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['total_bayar']; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_admin']; ?> </td>
			<td>
			<!-- <a  class="button btn-danger utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_pembayaran&idpembayaran=<?php echo $data['id_pembayaran']; ?>" title="Hapus">  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>


			<a  class="button btn-warning ukuran-btn-warning utilities" title="Edit" href="?menu=edit_pembayaran&idpembayaran=<?php echo $data['id_pembayaran']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Edit </a> -->

			<a  class="button btn-warning ukuran-btn-warning utilities" title="Edit" href="?menu=bayar&id_pembayaran=<?php echo $data['id_pembayaran']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Bayar </a>

		</td>
		</tr>

		<?php
		}}
		?>
</table>
	</div>
