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

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/summernote/summernote-bs4.css">
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
          <?php if ($this->session->userdata('level')==='1' || $this->session->userdata('level')==='6') { ?>
            <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_pembinaan'; ?>" <?php if ($this->uri->segment(2) == 'admin_pembinaan') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pembinaan
              </p>
            </a>
          </li>
          <?php } ?>
          
          <?php if ($this->session->userdata('level')==='1' || $this->session->userdata('level')==='5') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_intel'; ?>" <?php if ($this->uri->segment(2) == 'admin_intel') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Intelejen
              </p>
            </a>
          </li>
          <?php } ?>

          <?php if ($this->session->userdata('level')==='1' || $this->session->userdata('level')==='9') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_pidum'; ?>" <?php if ($this->uri->segment(2) == 'admin_pidum') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pidana Umum
              </p>
            </a>
          </li>
          <?php } ?>

          <?php if ($this->session->userdata('level')==='1' || $this->session->userdata('level')==='8') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_pidsus'; ?>" <?php if ($this->uri->segment(2) == 'admin_pidsus') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pidana Khusus
              </p>
            </a>
          </li>
          <?php } ?>

          <?php if ($this->session->userdata('level')==='1' || $this->session->userdata('level')==='4') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_datun'; ?>" <?php if ($this->uri->segment(2) == 'admin_datun') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Perdata
              </p>
              <p> Tata Usaha</p>
            </a>
          </li>
          <?php } ?>

          <?php if ($this->session->userdata('level')==='1' || $this->session->userdata('level')==='3') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_barbuk'; ?>" <?php if ($this->uri->segment(2) == 'admin_barbuk') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Barang Bukti
              </p>
            </a>
          </li>
          <?php } ?>

          <?php if ($this->session->userdata('level')==='1' || $this->session->userdata('level')==='7') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_pemeriksa'; ?>" <?php if ($this->uri->segment(2) == 'admin_pemeriksa') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pemeriksa
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-header">Kelola Kegiatan</li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_post'; ?>" <?php if ($this->uri->segment(2) == 'admin_post') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?>>
              <i class="far fa-file-alt"></i>
              <p>Tambah Kegiatan Bidang</p>
            </a>
          </li>

          <?php if ($this->session->userdata('level')==='1') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/admin_profil'; ?>" <?php if ($this->uri->segment(2) == 'admin_profil') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Barang Bukti
              </p>
            </a>
          </li>
          <?php } ?>
          
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
    <strong>Copyright &copy; 2020 <a href="#">Kejaksaan Negeri Ambon</a>.</strong>
    Rijali No. 9 Kecamatan Sirimau, Kota Ambon
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
<script src="<?= base_url('assets'); ?>/dist/js/chart.js"></script>
<script src="<?= base_url('assets'); ?>/summernote/summernote-bs4.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
        $(function () {
                CKEDITOR.replace('ckeditor',{
                    filebrowserImageBrowseUrl : '<?= base_url('assets'); ?>/kcfinder/browse.php',
                    height: '400px'             
                });
            });
    </script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();

} );

</script>

<script> 
          $(function () {
      'use strict'

      var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
      }

      var mode      = 'index'
      var intersect = true

      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
          labels: [
              'Sangat Tidak Puas', 
              'Tidak Puas',
              'Biasa', 
              'Puas', 
              'Sangat Puas', 
          ],
          datasets: [
            {
              data: [
                <?php 
                            $satu = $this->db->query('SELECT * FROM rating WHERE kepuasan="Sangat Tidak Puas"');
                            $dua = $this->db->query('SELECT * FROM rating WHERE kepuasan="Kurang Puas"');
                            $tiga = $this->db->query('SELECT * FROM rating WHERE kepuasan="Biasa"');
                            $empat = $this->db->query('SELECT * FROM rating WHERE kepuasan="Puas"');
                            $lima = $this->db->query('SELECT * FROM rating WHERE kepuasan="Sangat Puas"');
                            ?>
                <?php echo $satu->num_rows(); ?>,
                <?php echo $dua->num_rows(); ?>,
                <?php echo $tiga->num_rows(); ?>,
                <?php echo $empat->num_rows(); ?>,
                <?php echo $lima->num_rows(); ?>
              ],
              backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }
          ]
        }
        var donutOptions     = {
          maintainAspectRatio : false,
          responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
          type: 'doughnut',
          data: donutData,
          options: donutOptions      
        })
    })

    </script>
</body>
</html>