<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Kejari Ambon</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/plugins/daterangepicker/daterangepicker.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="btn btn-block btn-outline-danger" href="<?=site_url('admin/auth/logout')?>"><Strong>LOGOUT</Strong></i></a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-light-lime elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets'); ?>/dist/img/jaksa.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kejari Ambon</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class="far fa-user" style="height: 10px; margin-top: 8px;"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">Selamat Datang, Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url().'admin'; ?>" <?php if ($this->uri->segment(2) == '') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">KELOLA DATA</li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_pembinaan'; ?>" <?php if ($this->uri->segment(2) == 'admin_pembinaan') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pembinaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_intel'; ?>" <?php if ($this->uri->segment(2) == 'admin_intel') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Intelejen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_pidum'; ?>" <?php if ($this->uri->segment(2) == 'admin_pidum') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pidana Umum
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_pidsus'; ?>" <?php if ($this->uri->segment(2) == 'admin_pidsus') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pidana Khusus
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_datun'; ?>" <?php if ($this->uri->segment(2) == 'admin_datun') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Perdata
              </p>
              <p> Tata Usaha</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_barbuk'; ?>" <?php if ($this->uri->segment(2) == 'admin_barbuk') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Barang Bukti
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_pemeriksa'; ?>" <?php if ($this->uri->segment(2) == 'admin_pemeriksa') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pemeriksa
              </p>
            </a>
          </li>
          <li class="nav-header">Kelola Kegiatan</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i>
              <p>Tambah Kegiatan Bidang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i>
              <p>Adyaksa Dharmakarin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i>
              <p>WBK / WBMM</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <?php echo $contents ?>
  </div>
  <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets'); ?>/dist/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets'); ?>/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= base_url('assets'); ?>/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('assets'); ?>/dist/plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets'); ?>/dist/js/demo.js"></script>
<script src="<?= base_url('assets'); ?>/dist/js/pages/dashboard3.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();

} );

</script>
</body>
</html>