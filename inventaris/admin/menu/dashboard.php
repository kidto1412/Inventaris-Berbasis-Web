<?php
					include "../inc/koneksi.php";
					session_start();
					if ($_SESSION['userweb']=="") {
					header('location:../login.php');
					}
					$qprofil = mysqli_query($koneksi,"Select * from petugas WHERE id_petugas='$_SESSION[userweb]'");
					$profil = mysqli_fetch_array($qprofil);
					?>
<div class="content">
			<h1> Dashboard </h1>
			<hr class="hr1">
	</div>

<div class="alert info1 jarak2">
	<marquee> Selamat Datang </marquee>
</div>

<?php
		$qjumlah = mysqli_query($koneksi,"select * from petugas");
		$jumlah =mysqli_num_rows($qjumlah);
		?>
<div class="container ">
<div class="alert success1  utilities ">
<i class="fa fa-user fa-4x" ></i>
<p class="posisi-huruf">
	Petugas
</p>

<h1 class="posisi-huruf2"><?php echo $jumlah; ?> </h1>
</div>
<?php
		$qjumlah = mysqli_query($koneksi,"select * from pegawai");
		$jumlah =mysqli_num_rows($qjumlah);
		?>
<div class="alert primary lebar1 utilities">
<i class="fa fa-users fa-4x" ></i>
<p class="posisi-huruf "> Pegawai </p>
<h1 class="posisi-huruf2"><?php echo $jumlah; ?></h1>
</div>
<?php
		$qjumlah = mysqli_query($koneksi,"select * from ruang");
		$jumlah =mysqli_num_rows($qjumlah);
		?>
<div class="alert danger1 lebar1 utilities">
<i class="fa fa-joomla fa-4x" ></i>
<p class="posisi-huruf "> Ruang </p>
<h1 class="posisi-huruf2"><?php echo $jumlah; ?></h1>
</div>
<?php
		$qjumlah = mysqli_query($koneksi,"select * from jenis");
		$jumlah =mysqli_num_rows($qjumlah);
		?>
<div class="alert warning lebar1 utilities">
<i class="fa fa-list fa-4x" ></i>
<p class="posisi-huruf "> Jenis </p>
<h1 class="posisi-huruf2"><?php echo $jumlah; ?></h1>
</div>
</div>
<div class="content">
<table class="table tiny table-hoverable table-striped table-bordered table-striped batas-atas">


				<tr>
					<th class="ukuran-huruf"> Information login </th>
				</tr>
				<tr>
					<td class="ukuran-huruf3">nama : <?php echo $profil['nama_petugas']; ?></td>
				</tr>
				<tr>
					<td class="ukuran-huruf3">ID Petugas : <?php echo $profil['id_petugas']; ?></td>
				</tr>
				<tr>
					<td class="ukuran-huruf3">Username : <?php echo $profil['username']; ?></td>
				</tr>


			</table>
	</div>
