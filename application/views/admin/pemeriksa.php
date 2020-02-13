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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl"><i class="far fa-plus-square"> Tambah Data</i></button>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-9">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Laporan Pelanggaran Pegawai</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th><center>Nama Pelapor</center></th>
                        <th>
                          <center>Jenis Identitas</center>
                        </th>
                        <th>
                          <center>No Identitas</center>
                        </th>
                        <th>
                          <center>Email / Telepon</center>
                        </th>
                        <th>
                          <center>Pegawai Terlapor</center>
                        </th>
                        <th>
                          <center>Dugaan Pelanggaran</center>
                        </th>
                        <th>
                          <center>Keterangan</center>
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
                        <td><center>  </center></td>
                        <td><center> </center></td>
                        <td><center>  </center></td>
                        <td><center>  </center></td>
                        <td><center>  </center></td>
                        <td><center>  </center></td>
                        <td><center>  </center></td>
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
          <div class="col-lg-3">
            <div class="card">
              <div class="card-header border-0">
                  <h3 class="card-title">Rekapitulasi Laporan</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between">
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>
                          Status
                        </th>
                        <th>
                          <center>Jumlah</center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Belum Diproses</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <td>Sedang Diproses</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <td>Selesai</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <th>Jumlah</th>
                        <th><center> 6 </center></th>
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
