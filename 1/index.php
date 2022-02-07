<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Unis-Tangerang</title>
  <!-- Icon -->
  <link rel="shortcut icon" type="image/icon" href="../icon-mini.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
      include "content_header.php";  
      ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
            <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="dosen.php"><i class="fa fa-user"></i><span>Dosen</span></a></li>
            <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Mahasiswa</span></a></li>
            <li><a href="ruangan.php"><i class="fa fa-columns"></i><span>Ruangan</span></a></li>
            <li><a href="matakuliah.php"><i class="fa fa-book"></i><span>Matakuliah</span></a></li>
            <li><a href="jurusan.php"><i class="fa fa-university"></i><span>Jurusan</span></a></li>
            <li><a href="jenjang.php"><i class="fa fa-graduation-cap"></i><span>Jenjang</span></a></li>
            <li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
            <li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                 <h1><center><b>UNIS TANGERANG</b></center></h1>
                 <center><img src="../aset/foto/bg3.png" width="1000" height="800" /></center>
               </div><!-- /.box-header -->
               <div class="box-body">
               </div><!-- /.box-body -->
             </div><!-- /.box -->
           </div><!-- /.col -->
         </div><!-- /.row -->

         <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
               <h1><center><b>ABOUT</b></center></h1>
               <center><h3>UNIVERSITAS ISLAM SYEKH YUSUF atau biasa disebut UNIs adalah Universitas pertama yang ada dibanten. berdiri sejak 14 April 1966 sekarang berusia 56 tahun.</h3>
                <h3>UNIS memiliki visi misi yaitu “Terwujudnya Universitas Islam Unggul pada Bidang Ilmu Pengetahuan dan Teknologi dalam Era Persaingan Universitas dunia pada tahun 2032”</h3></center>
              </div><!-- /.box-header -->
              <div class="box-body">
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
               <h1><center><b>Program Pendidikan UNIS</b></center></h1>
               <div class="panel panel-primary">
                <H3><center><b>FAKULTAS ILMU SOSIAL & ILMU POLITIK</b></center></H3>
                <h5><center><b>Administrasi Negara, ilmu Komunikasi</b></center></h5>
              </div>
              <div class="panel panel-success">
                <H3><center><b>FAKULTAS HUKUM</b></center></H3>
                <h5><center><b>Ilmu Hukum</b></center></h5>
              </div>
              <div class="panel panel-info">
                <H3><center><b>FAKULTAS AGAMA ISLAM</b></center></H3>
                <h5><center><b>Pendidikan Agama Islam</b></center></h5>
              </div>
              <div class="panel panel-warning">
                <H3><center><b>PASCASARJANA</b></center></H3>
                <h5><center><b>Magister Ilmu Hukum, Magister Ilmu Administrasi, Magister Ilmu Manajemen</b></center></h5>
              </div>
              <div class="panel panel-danger">
                <H3><center><b>FAKULTAS TEKNIK</b></center></H3>
                <h5><center><b>Teknik Kimia, Teknik Informatika, Teknik Industri, Teknik Sipil</b></center></h5>
              </div>
              <div class="panel panel-primary">
                <H3><center><b>FAKULTAS KEGURUAN & ILMU PENDIDIKAN</b></center></H3>
                <h5><center><b>Pendidikan Bahasa Inggris, Pendidikan Ekonomi</b></center></h5>
              </div>
              <div class="panel panel-success">
                <H3><center><b>FAKULTAS EKONOMI & BISNIS</b></center></H3>
                <h5><center><b>Ekonomi Manajemen, Ekonomi Akuntansi</b></center></h5>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1><center><b>GALERI</b></center></h1>
              <div class="row">
                <div class="col-xs-6 col-md-4">
                  <a href="#" class="thumbnail">
                    <img src="../aset/foto/img1.jpg" alt="...">
                  </a>
                </div>
                <div class="col-xs-6 col-md-4">
                  <a href="#" class="thumbnail">
                    <img src="../aset/foto/img2.jpg" alt="...">
                  </a>
                </div>
                <div class="col-xs-6 col-md-4">
                  <a href="#" class="thumbnail">
                    <img src="../aset/foto/img3.jpg" alt="...">
                  </a>
                </div>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1><center><b>CONTACT</b></center></h1>
              <div class="row">
                <div class="col-xs-6 col-md-4">
                  <center><h4><b>ALAMAT</b></h4></center>
                  <a href="https://goo.gl/maps/SFg4A6uvrFF4R8RH9" class="thumbnail">
                    <center><i class="glyphicon glyphicon-home fa-5x"></i></center>
                    <center><h5><b>Jl. Maulana Yusuf No. 10 Babakan. Kota Tangerang. Banten. 15118</b></h5></center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-4">
                  <center><h4><b>EMAIL</b></h4></center>
                  <a href="mailto:www.unis.ac.id" class="thumbnail">
                    <center><i class="glyphicon glyphicon-envelope fa-5x"></i></center>
                    <center><h5><b>www.unis.ac.id</b></h5></center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-4">
                  <center><h4><b>TELPON</b></h4></center>
                  <a href="mailto:www.unis.ac.id" class="thumbnail">
                    <center><i class="glyphicon glyphicon-earphone fa-5x"></i></center>
                    <center><h5><b>+6221-5527061</b></h5></center>
                  </a>
                </div>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <?php
  include	"content_footer.php";
  ?>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../aset/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../aset/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../aset/dist/js/app.min.js"></script>
</body>
</html>
