<?php include 'header.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">

      <?php
      if (isset($_GET['halaman'])) {
        if ($_GET['halaman'] == "home") {
          include 'home.php';
        } elseif ($_GET['halaman'] == "produk") {
          include 'produk.php';
        } elseif ($_GET['halaman'] == "pelanggan") {
          include 'pelanggan.php';
        } elseif ($_GET['halaman'] == "pembeli") {
          include 'pembelian.php';
        } elseif ($_GET['halaman'] == "detail") {
          include 'detail.php';
        } elseif ($_GET['halaman'] == "logout") {
          include 'logout.php';
        }
      } else {
        include 'home.php';
      }

      ?>

    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content-header -->

  <!-- Main content -->



  <!-- /.content -->
  <?php include 'footer.php' ?>