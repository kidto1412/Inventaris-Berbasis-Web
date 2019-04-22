<div class="content">
  <h1 class="kiri">Pegawai</h1>
  <hr class="hr1">
  <a href="" class="button btn-success kiri utilities"> Tambah Data </a>
   <table class="table tiny table-hoverable table-striped table-bordered table-striped">

		
				<tr>
					<th class="ukuran-huruf"> No </th>
					<th class="ukuran-huruf"> Nama </th>
					<th class="ukuran-huruf"> Alamat </th>
					<th class="ukuran-huruf"> Telepon </th>
					<th class="ukuran-huruf"> Username </th>
					<th class="ukuran-huruf"> Status </th>
					<th class="ukuran-huruf"> Akses </th>
					<th class="ukuran-huruf"> Opsi </th>

		</tr>

				
		<?php
		$no = 1;
				$query = mysqli_query($koneksi,"select * from tb_kasir");
		while ($data = mysqli_fetch_array($query)) {
	
		?>
		<tr>
			<td class="ukuran-huruf1"> <?php echo $no++; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['nama'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['alamat'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['telepon'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['username'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['status'] ; ?> </td>
			<td class="ukuran-huruf1"> <?php echo $data['akses'] ; ?> </td>
			<td>
			<a  class="button btn-danger utilities" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_pegawai&id_pegawai=<?php echo $data['id_kasir']; ?>" title="Hapus">  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>

			
			<a  class="button btn-warning ukuran-btn-warning utilities" title="Edit" href="?menu=edit_pegawai&id_pegawai=<?php echo $data['id_kasir']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Edit </a>

		</td>
		</tr>
		
		<?php
		}
		?>

	</div>

