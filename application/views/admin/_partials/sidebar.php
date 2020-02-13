<aside class="main-sidebar sidebar-light-lime elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/jaksa.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
            <a href="<?php echo base_url().'admin/pembinaan'; ?>" <?php if ($this->uri->segment(2) == 'pembinaan') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pembinaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/intel'; ?>" <?php if ($this->uri->segment(2) == 'intel') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Intelejen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/pidum'; ?>" <?php if ($this->uri->segment(2) == 'pidum') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pidana Umum
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/pidsus'; ?>" <?php if ($this->uri->segment(2) == 'pidsus') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pidana Khusus
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/datun'; ?>" <?php if ($this->uri->segment(2) == 'datun') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Perdata
              </p>
              <p> Tata Usaha</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/barangbukti'; ?>" <?php if ($this->uri->segment(2) == 'barangbukti') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Barang Bukti
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/pemeriksa'; ?>" <?php if ($this->uri->segment(2) == 'pemeriksa') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Bidang Pemeriksa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/adyaksa'; ?>" <?php if ($this->uri->segment(2) == 'adyaksa') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?> >
              <i class="far fa-edit"></i>
              <p>
                Adyaksa Dharmakarin
              </p>
            </a>
          </li>
          <li class="nav-header">PENGADUAN MASYARAKAT</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i>
              <p>Pengaduan Tindak Pidana</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i>
              <p>Bantuan Hukum</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i>
              <p>Pelanggaran Pegawai</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>