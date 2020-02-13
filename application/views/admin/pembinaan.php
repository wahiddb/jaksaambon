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
            <h1 class="m-0 text-dark">Bidang Pembinaan</h1>
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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl"><i class="far fa-plus-square"> Tambah Pegawai Baru</i></button>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Data Kepegawaian</h3>
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
                        <th><center>Nama</center></th>
                        <th>
                          <center>NIP/NRP</center>
                        </th>
                        <th>
                          <center>Jabatan</center>
                        </th>
                        <th>
                          <center>Bidang</center>
                        </th>
                        <th>
                          <center>Golongan Pangkat</center>
                        </th>
                        <th>
                          <center>Pendidikan</center>
                        </th>
                        <th>
                          <center>Tempat / Tanggal Lahir</center>
                        </th>
                        <th>
                          <center>No. Telepon</center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><center>Dono Kasino</center></td>
                        <td><center> Jaksa Agung Muda </center></td>
                        <td><center> 23133232 </center></td>
                        <td><center> Kabid </center></td>
                        <td><center> Eselon IV </center></td>
                        <td><center> S1 </center></td>
                        <td><center> Semarang </center></td>
                        <td><center> 09302930293 </center></td>
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
                      <tr>
                        <td>1</td>
                        <td><center>Dono Kasino</center></td>
                        <td><center> Jaksa Agung Muda </center></td>
                        <td><center> 23133232 </center></td>
                        <td><center> Kabid </center></td>
                        <td><center> Eselon IV </center></td>
                        <td><center> S1 </center></td>
                        <td><center> Semarang </center></td>
                        <td><center> 09302930293 </center></td>
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
                      <tr>
                        <td>1</td>
                        <td><center>Dono Kasino</center></td>
                        <td><center> Jaksa Agung Muda </center></td>
                        <td><center> 23133232 </center></td>
                        <td><center> Kabid </center></td>
                        <td><center> Eselon IV </center></td>
                        <td><center> S1 </center></td>
                        <td><center> Semarang </center></td>
                        <td><center> 09302930293 </center></td>
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
                      <tr>
                        <td>1</td>
                        <td><center>Dono Kasino</center></td>
                        <td><center> Jaksa Agung Muda </center></td>
                        <td><center> 23133232 </center></td>
                        <td><center> Kabid </center></td>
                        <td><center> Eselon IV </center></td>
                        <td><center> S1 </center></td>
                        <td><center> Semarang </center></td>
                        <td><center> 09302930293 </center></td>
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
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header border-0">
                  <h3 class="card-title">Rekapitulasi Jumlah Pegawai</h3>
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
                          Bidang
                        </th>
                        <th>
                          <center>Jumlah</center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Pembinaan</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <td>Intelijen</td>
                        <td><center> 5 </center></td>
                      </tr>
                      <tr>
                        <td>Pidana Umum</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <td>Pidana Khusus</td>
                        <td><center> 1 </center></td>
                      </tr>
                      <tr>
                        <td>Perdata & Tata Usaha</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <td>Barang Bukti</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <td>Pemeriksa</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <th>Total</th>
                        <td><center> 15 </center></td>
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
