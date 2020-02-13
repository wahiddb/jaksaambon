<?php $this->load->view("admin/_partials/head"); ?>
  <!-- /.navbar -->
  <?php $this->load->view("admin/_partials/navbar"); ?>
  <!-- Main Sidebar Container -->
  <?php $this->load->view("admin/_partials/sidebar"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <!-- Main content -->
     <div class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl"><i class="far fa-plus-square"> Tambah Data Pidum</i></button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl"><i class="far fa-plus-square"> Tambah Data Tilang</i></button>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <h2 class="m-1 text-dark">Pidana Umum</h2>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Data Pidana Umum</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th><center>Nomor Perkara</center></th>
                        <th>
                          <center>Pasal Yang Dilanggar</center>
                        </th>
                        <th>
                          <center>Tersangka</center>
                        </th>
                        <th>
                          <center>Keterangan</center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><center>Dono Kasino</center></td>
                        <td><center> Jaksa Agung Muda </center></td>
                        <td><center> Status </center></td>
                        <td><center> Keterangan </center></td>
                        <td>
                          <th>
                            <center>
                              <button type="button" class="btn btn-warning"><i class="far fa-edit"> Edit</i></button>
                              <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"> Hapus</i></button>
                            </center>
                          </th>
                        </td>
                      </tr>
                
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <h2 class="m-1 text-dark">Tilang </h2>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Tilang</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body table-responsive p-0" style="height: 500px;">
                  <table class="table table-head-fixed text-nowrap">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th><center>Nama Pelanggar</center></th>
                          <th>
                            <center>Pasal Yang Dilanggar</center>
                          </th>
                          <th>
                            <center>Nomor Seri Tilang</center>
                          </th>
                          <th>
                            <center>Plat Nomor</center>
                          </th>
                          <th>
                            <center>Tanggal Sidang</center>
                          </th>
                          <th>
                            <center>Status</center>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td><center>Dono Kasino</center></td>
                          <td><center> Jaksa Agung Muda </center></td>
                          <td><center> Status </center></td>
                          <td><center> Keterangan </center></td>
                          <td>
                            <th>
                              <center>
                                <button type="button" class="btn btn-warning"><i class="far fa-edit"> Edit</i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"> Hapus</i></button>
                              </center>
                            </th>
                          </td>
                        </tr>
                  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Pegawai</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputName">Nama Pegawai</label>
                <input type="text" id="inputName" class="form-control" value="Nama Pegawai">
              </div>
              <div class="form-group">
                <label for="inputDescription">Jabatan</label>
                <select class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Kasubag</option>
                  <option>Jaksa Agung Muda</option>
                  <option selected>Kabid</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Bidang</label>
                <select class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Pembinaan</option>
                  <option>Intelijen</option>
                  <option selected>Pidana Umum</option>
                  <option selected>Pidana Khusus</option>
                  <option selected>Perdata & Tata Usaha</option>
                  <option selected>Barang Bukti</option>
                  <option selected>Pemeriksa</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">No. Register</label>
                <input type="text" id="inputClientCompany" class="form-control" value="No Register">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Tambahkan Data</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("admin/_partials/footer"); ?>
