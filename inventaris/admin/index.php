<?php
  include "../inc/koneksi.php";
  session_start();
  if ($_SESSION['userweb']=="") {
    header('location:../login.php');
  }
  $qprofil = mysqli_query($koneksi,"Select * from petugas WHERE id_petugas='$_SESSION[userweb]'");
  $profil = mysqli_fetch_array($qprofil);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
      <link rel="stylesheet" href="../assets/sass/fontawesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script async defer src="https://buttons.github.io/buttons.js"></script>
   <!--  <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/alert.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/style2.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/fahriz.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/fahriz6.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/fahriz2.css"> -->

    <link rel="stylesheet" type="text/css" href="../css/all.css">

    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script async defer src="buttons.js"></script>
    <script src="buttons.js"></script>
    <style type="text/css">
      body {
  font-family: 'Roboto', sans-serif;
  /* // background: purple; */
  background: #F4F6F9;
}
      table {
    border-collapse: collapse;
    width: 100%;
    background-color: ;
  }

  th, td {
    text-align: left;
    padding: 8px;

  }

  tr:nth-child(even) {background-color: #f2f2f2;}
   .tbl th.header {
          background-image: url(js/table.sorter/themes/blue/bg.gif);
          cursor: pointer;
          font-weight: bold;
          background-repeat: no-repeat;
          background-position: center left;
          padding-left: 20px;
          margin-left: -1px;
      }

      .tbl th.headerSortUp {
        background-image: url(js/table.sorter/themes/blue/asc.gif);
        cursor: pointer;
          font-weight: bold;
          background-repeat: no-repeat;
          background-position: center left;
          padding-left: 20px;
          margin-left: -1px;

      }
      .tbl th.headerSortDown {
        background-image: url(js/table.sorter/themes/blue/desc.gif);
        cursor: pointer;
          font-weight: bold;
          background-repeat: no-repeat;
          background-position: center left;
          padding-left: 20px;
          margin-left: -1px;
      }
      .utilities{
        border-radius: 5px;
      }
      .utilities2{
        border-radius: 100px;
      }
      .reset{
        width: 6%;
        padding-bottom: 13px;
        margin-top: -20px;
        padding-top: 10px;
      }
      .tambah{
        width:11%;
        padding-top: 10px;
        padding-bottom: 13px;
      }
   .info1
    {
      background-color: #d9edf7;
    color: black;
    border-radius: 10px;

}
.container {
    display:grid;
    grid-template-columns: 20% 20% 20% 20%;
    padding: 1em 1em;
    margin-left: 28px;
}
.lebar1{
  width: 200px;
  padding-bottom:  50px;
}
.alert.danger1 {
  background-color: #f44336;
width: 200px;
}
.panjang{
  padding-bottom: 70px;
}
.batas-atas{
  margin-top: -2%;
}



.ukuran-huruf2{
  font-size: 12px;
}
.ukuran-huruf3{
  font-size: 14px;
}

.ukuran-huruf4{
  font-size: 15.8px;
}

.ukuran-huruf5{
  font-size: 12.8px;
}


.jarak2{
  margin-top: -25px;
  width: 1072px;
}
.baca{
  background-color: #999;
}
/*.grid-container {*/
  /*display: grid;*/
  /*grid-template-columns: auto auto auto auto;*/
  /*background-color: #2196F3;*/
  /*padding: 10px;*/
/*}*/
/*.grid-item {*/
  /*background-color: rgba(255, 255, 255, 0.8);*/
  /*border: 1px solid rgba(0, 0, 0, 0.8);*/
  /*padding: 20px;*/
  /*font-size: 30px;*/
  /*text-align: center;*/
/*}*/

      /*form*/
      .cari[type=text], select {
  width: 30%;
  /*width:20%*/
  padding: 10px 20px;
  margin: 8px 0;
  margin-top: -20px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

      .content2{
  margin-left: 56%;
  margin-top: -3.4%;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.alert.success1 {
  background-color: #4CAF50;
width: 200px;

}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.input2[type=submit] {
  /*width: 5%;*/
  width: 11%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.input2[type=submit]:hover {
  background-color: #45a049;
}

.input1[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.table-bordered1{
  border-collapse: collapse;
  width: 79%;
}

.input1[type=submit]:hover {
  background-color: red;
}

.btn-gagal {
  width: 100%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.posisi-huruf{
    margin-top: -10px;
    margin-left: 95px;
    padding-top: 10px;
}
.posisi-huruf-admin{
    margin-top: -10px;
    margin-left: 120px;
    padding-top: 10px;
}
.posisi-huruf2{
  margin-left: 79px;
  font-weight: bold;
  font-size: 26px;
  margin-top: -50px;
}
/* .sidebarMenuInner li:hover{
  /* background-color: #282639; */
   background-color: #111;

} */


.sidebarMenuInner li a.active{
  background-color: blue;
}
.sidebarMenuInner  span a.active{
  background-color: blue;
}


/* .active{
  background-color: #282639;
  background-color: #111;
  /* border-left: 5px solid #92CF48; */
 padding: 15px 30px 15px 25px;
} */




.btn-primary:hover{
background-color: #006CBb;
}

.btn-success:hover{
background-color: #1BBF50;
}

.btn-primary:hover{
background-color: #006CBb;
}

.btn-gagal:hover {
  background-color: #f44336;
}
.button1 {
  /*background-color: #4CAF50; /* Green */*/
  border: none;
  color: white;
  padding: 12px 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 7px 0;
  cursor: pointer;
}
.btn-cetak {background-color: #e7e7e7; color: black;}
.ukuran-btn-cetak
{
  padding: 10px 15px;
  padding-bottom: 13px;
}

.ukuran-btn-pinjam
{
  padding-bottom: 12px;
  padding-left: 5px;
}

.div1 {

  background-color:white;
  padding: 20px;
  width: 76%;
  border: 1.2px solid #008CBA;
  margin-bottom: 100px;
}

.div2 {

  background-color:;
  padding: 20px;
  width: 76%;

  /* border: 1.2px solid #008CBA; */
}
.panel-heading{
  width: 76%;
    color: white;
    padding-top: 0;
    padding-bottom: 0;
    background-color: #008CBA;
    margin-bottom: 0;
    margin-top: 0;
}
.panel-heading p{
  margin-left: 10px;
  padding-top: 10px;
  margin-bottom: -20px;
  padding-bottom: -1000px;
}
.warna2{
  color:
}
.batas-b{
  padding-bottom: 100px;
  margin-bottom: 10px;
  margin-top: 20px;
}
header p{
  font-size: 20px;
  margin-top: -18px;
  margin-left: 1000px;
  font-weight: bold;
  color: #92CF48;
}
nav img{
  margin-top: -20px;
  width: 35%;
  margin-left:60px;
  padding-top: -200px;
}
/*akhir form*/
    </style>
  </head>
  <body>
    <section id="sideMenu">
      <?php
               @$menu = $_GET['menu'];
               ?>
      <nav>
          <h1 class="judul"> Administrator</h1>
          <img src="finventaris.png"/>
        <a href="index.php"  <?php if ($menu=="") {echo "class='active' "; } ?>><i class="fa fa-dashboard" aria-hidden></i> Dashboard </a>
        <a href="?menu=data_petugas"  <?php if ($menu=="data_petugas" || $menu=="tambah_petugas" ||$menu=="edi_petugas" ||$menu=="hapus_petugas") {echo "class='active' "; } ?>><i class="fa fa-user" aria-hidden></i> Petugas</a>

         <a href="?menu=data_pegawai" <?php if ($menu=="data_pegawai" || $menu=="tambah_pegawai" ||$menu=="edit_pegawai" ||$menu=="hapus_pegawai") {echo "class='active' "; } ?>><i class="fa fa-users" aria-hidden></i> Pegawai </a>

        <a href="?menu=data_jenis" <?php if ($menu=="data_jenis" || $menu=="tambah_jenis" ||$menu=="edit_jenis" ||$menu=="hapus_jenis") {echo "class='active' "; } ?>><i class="fa fa-list" aria-hidden></i> jenis</a>

        <a href="?menu=data_ruang" <?php if ($menu=="data_ruang" || $menu=="tambah_ruang" ||$menu=="edit_ruang" ||$menu=="hapus_ruang") {echo "class='active' "; } ?>><i class="fa fa-joomla" aria-hidden></i> Ruang </a>

        <a href="?menu=data_level" <?php if ($menu=="data_level" || $menu=="tambah_level" ||$menu=="edit_level" ||$menu=="hapus_level") {echo "class='active' "; } ?>><i class="fa fa-level-up" aria-hidden></i> Level </a>

        <a href="?menu=data_inventaris" <?php if ($menu=="data_inventaris" || $menu=="tambah_inventaris" ||$menu=="edit_inventaris" ||$menu=="hapus_inventaris") {echo "class='active' "; } ?>><i class="fa fa-dropbox" aria-hidden></i> inventaris </a>

         <a href="?menu=detail_pinjam" <?php if ($menu=="detail_pinjam" || $menu=="tambah_detail" ||$menu=="edit_detail" ||$menu=="hapus_detail") {echo "class='active' "; } ?>><i class="fa fa-money" aria-hidden></i> Detail Pinjam </a>

         <a href="?menu=data_peminjaman" <?php if ($menu=="data_peminjaman" || $menu=="tambah_peminjaman" ||$menu=="edit_peminjaman" ||$menu=="hapus_peminjaman") {echo "class='active' "; } ?>><i class="fa fa-hand-o-right" aria-hidden></i> Peminjaman </a>

         <a onclick="return confirm('anda akan keluar ?')"href="../inc/keluar.php" class="active batas-b"><i class="fa fa-sign-out" aria-hidden></i> Keluar </a>
      </nav>

    </section>
<header>
  <!-- <input type="text" name="" value=""> -->
  <h1 class="judul2">Aplikasi Inventaris</h1>
  <p><?php echo $profil['nama_petugas']; ?></p>

</header>

  </body>
</html>
 <?php
            error_reporting(0);
            switch ($_GET['menu']) {



            case 'data_pegawai':
              include "menu/data_pegawai.php";
              break;

            case 'tambah_pegawai':
                 include "menu/tambah_pegawai.php";
                 break;

                 case 'edit_pegawai':
                 include "menu/edit_pegawai.php";
                 break;

                     case 'hapus_pegawai': $id=$_GET['id_pegawai']; mysqli_query($koneksi, "delete from pegawai where id_pegawai='$id'");
                     ?>
                     <script type="text/javascript">
                       alert('berhasil dihapus');
                       document.location.href="?menu=data_pegawai";
                     </script>
                     <?php
              include "menu/data_pegawai.php";
              break;


                     case 'hapus_admin': $id=$_GET['idadmin']; mysqli_query($koneksi, "delete from admin where id_admin='$id'");
                          include "menu/data_admin.php";
                          break;

                // Level
                case 'data_level':
                  include "menu/data_level.php";
                  break;

                  case 'tambah_level':
                    include "menu/tambah_level.php";
                    break;

                    case 'edit_level':
                      include "menu/edit_level.php";
                      break;

                      case 'hapus_level': $id=$_GET['idlevel']; mysqli_query($koneksi, "delete from level where id_level='$id'");
                      ?>
                      <script type="text/javascript">
                        alert('berhasil dihapus');
                        document.location.href="?menu=data_level";
                      </script>
                      <?php
                      include "menu/data_level.php";
                      break;


                      // Peminjaman
                      case 'data_peminjaman':
                        include "menu/data_peminjaman.php";
                        break;

                        case 'tambah_peminjaman':
                          include "menu/tambah_peminjaman.php";
                          break;

                          case 'edit_peminjaman':
                            include "menu/edit_peminjaman.php";
                            break;

                            case 'hapus_peminjaman': $id=$_GET['idpeminjaman']; mysqli_query($koneksi, "delete from peminjaman where id_peminjaman='$id'");
                            ?>
                            <script type="text/javascript">
                              alert('berhasil dihapus');
                              document.location.href="?menu=data_peminjaman";
                            </script>
                            <?php
                            include "menu/data_peminjaman.php";
                            break;


                      // akhir peminjaman

                // akhir level

                //Inventaris
                case 'data_inventaris':
                  include "menu/data_inventaris.php";
                  break;

                  case 'tambah_inventaris':
                    include "menu/tambah_inventaris.php";
                    break;

                    case 'edit_inventaris':
                      include "menu/edit_inventaris.php";
                      break;

                      case 'hapus_inventaris': $id=$_GET['idinventaris']; mysqli_query($koneksi, "delete from inventaris where id_inventaris='$id'");
                      ?>
                      <script type="text/javascript">
                        alert('berhasil dihapus');
                        document.location.href="?menu=data_inventaris";
                      </script>
                      <?php
                      include "menu/data_inventaris.php";
                      break;

                 // akhir


              // data Petugas
              case 'data_petugas':
                include "menu/data_petugas.php";
                break;

                case 'tambah_petugas':
                  include "menu/tambah_petugas.php";
                  break;

                  case 'edit_petugas':
                    include "menu/edit_petugas.php";
                    break;

                    case 'hapus_petugas': $id=$_GET['idpetugas']; mysqli_query($koneksi, "delete from petugas where id_petugas='$id'");
                    ?>
                    <script type="text/javascript">
            					alert('berhasil dihapus');
            					document.location.href="?menu=data_petugas";
            				</script>
                    <?php
                    include "menu/data_petugas.php";
                    break;

                    case 'data_jenis':
                      include "menu/data_jenis.php";
                      break;

                      case 'tambah_jenis':
                        include "menu/tambah_jenis.php";
                        break;

                        case 'edit_jenis':
                          include "menu/edit_jenis.php";
                          break;

                          case 'hapus_jenis': $id=$_GET['idjenis']; mysqli_query($koneksi, "delete from jenis where id_jenis='$id'");
                          ?>
                          <script type="text/javascript">
                            alert('berhasil dihapus');
                            document.location.href="?menu=data_jenis";
                          </script>
                          <?php
                          include "menu/data_jenis.php";
                          break;


                          case 'data_ruang':
                            include "menu/data_ruang.php";
                            break;

                            case 'tambah_ruang':
                              include "menu/tambah_ruang.php";
                              break;

                              case 'edit_ruang':
                                include "menu/edit_ruang.php";
                                break;

                                case 'hapus_ruang': $id=$_GET['idruang']; mysqli_query($koneksi, "delete from ruang where id_ruang='$id'");
                                ?>
                                <script type="text/javascript">
                                  alert('berhasil dihapus');
                                  document.location.href="?menu=data_inventaris";
                                </script>
                                <?php
                                include "menu/data_ruang.php";
                                break;


                                case 'pinjam':
                                include "menu/pinjam.php";
                                break;

                // detail
                case 'detail_pinjam':
                include "menu/detail_pinjam.php";
                break;

                case 'tambah_detail':
                include "menu/tambah_detail.php";
                break;

                case 'edit_detail':
                include "menu/edit_detail.php";
                break;

                case 'hapus_detail': $id=$_GET['iddetail']; mysqli_query($koneksi, "delete from detail_pinjam where id_detail_pinjam='$id'");
                ?>
                <script type="text/javascript">
                alert('berhasil dihapus');
                document.location.href="?menu=detail_pinjam";
                </script>
                <?php
                include "menu/detail_pinjam.php";
                break;
                // akhir detail

                 case 'home':
                include "menu/home.php";
                break;

            default:
            include "menu/dashboard.php";
            break;
            }
          ?>
