<div class="content">
			<h1> Pegawai </h1>
			<hr class="hr1">
			<a href="?menu=tambah_pegawai" class="button btn-primary utilities tambah"><i class="fa fa-plus"></i> Tambah Pegawai </a>
			<a href="" class="button btn-success reset utilities"> <i class="fa fa-refresh"> </i> Reset </a>
			<a  class="button btn-cetak ukuran-btn-cetak utilities" title="Cetak"  href="menu/laporan/cetak_pegawai.php" target="blank"> <i class="fa fa-print" aria-hidden="true"> </i> Cetak </a>
	<div class="content2">
			<form method="post">
			<input name="inputan" type="text" class="cari" placeholder="Cari Nama Pegawai..">
			<input name="cari" class="input2" value="Cari" type="submit">
			</form>
	</div>
		</br>


			 <table class="table tiny table-hoverable table-striped table-bordered table-striped">


				<tr>
					<th class="ukuran-huruf"> No </th>
					<th class="ukuran-huruf"> ID Pegawai </th>
					<th class="ukuran-huruf"> Nama Pegawai </th>
					<th class="ukuran-huruf"> NIP </th>
					<th class="ukuran-huruf"> Alamat </th>
					<th class="ukuran-huruf"> Opsi </th>

		</tr>


		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from pegawai");
				}else if ($inputan!="") {
					$query = mysqli_query($koneksi,"select * from pegawai where nama_pegawai like '%$inputan%' ");
				}
			}
			else{
		$query = mysqli_query($koneksi,"select * from pegawai");
		}
		$cek = mysqli_num_rows($query);
		if($cek <1 ){
			?>
			<tr>
				<td colspan="8" class="ukuran-huruf1">
					data yang anda cari tidak tersedia
					<a href="" class="button btn-success utilities">Refresh</a>
				 </td>
			</tr>
			<?php
		}else{
		while ($data = mysqli_fetch_array($query)) {

		?>
		<tr>
			<td class="ukuran-huruf1"> <?php echo $no++; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['id_pegawai'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['nama_pegawai'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['nip'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['alamat'] ; ?> </td>
			<td>
			<a  class="button btn-danger utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_pegawai&id_pegawai=<?php echo $data['id_pegawai']; ?>" title="Hapus">  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>


			<a  class="button btn-warning ukuran-btn-warning utilities" title="Edit" href="?menu=edit_pegawai&id_pegawai=<?php echo $data['id_pegawai']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Edit </a>

		</td>
		</tr>

		<?php
		}}
		?>

	</div>
