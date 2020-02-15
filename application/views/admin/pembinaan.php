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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalAddPegawai"><i class="far fa-plus-square"> Tambah Pegawai Baru</i></button>
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
                    <?php
                        $no = 0;
                        foreach ($data->result_array() as $a) :
                            $no++;
                            $id = $a['id_pegawai'];
                            $nama = $a['nama'];
                            $nip = $a['nip'];
                            $jabatan = $a['jabatan'];
                            $bidang = $a['bidang'];
                            $gol = $a['gol'];
                            $pendidikan = $a['pendidikan'];
                            $ttl = $a['ttl'];
                            $phone = $a['phone']; ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no; ?></td>
                                <td style="text-align:center;"><?php echo $nama; ?></td>
                                <td style="text-align:center;"><?php echo $nip; ?></td>
                                <td style="text-align:center;"><?php echo $jabatan; ?></td>
                                <td style="text-align:center;"><?php echo $bidang; ?></td>
                                <td style="text-align:center;"><?php echo $gol; ?></td>
                                <td style="text-align:center;"><?php echo $pendidikan; ?></td>
                                <td style="text-align:center;"><?php echo $ttl; ?></td>
                                <td style="text-align:center;"><?php echo $phone; ?></td>
                                <td style="text-align:center;">
                                    <a class="btn btn-xs btn-warning" href="#modalAddPegawai<?php echo $id ?>" data-toggle="modal" title="Edit"><span class="far fa-edit"></span> Edit</a>
                                    <a class="btn btn-xs btn-danger" href="#modalHapusPegawai<?php echo $id ?>" data-toggle="modal" title="Hapus"><span class="far fa-trash-alt"></span> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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

<!-- ============ MODAL ADD =============== -->
      <div class="modal fade" id="modalAddPegawai" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Pegawai</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/admin_pembinaan/add_pegawai' ?>">
            <div class="modal-body">

              <div class="form-group">
                <label for="inputName">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai" required>
              </div>

              <div class="form-group">
                <label for="inputName">NIP / NIRP</label>
                <input type="text" name="nip" class="form-control" placeholder="NIP / NIRP" required>
              </div>

              <div class="form-group">
                <label for="inputName">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
              </div>

              <div class="form-group">
                <label for="inputDescription">Bidang</label>
                <select class="form-control custom-select" name="bidang" required>
                  <option selected disabled>Pilih Bidang</option>
                  <option>Pembinaan</option>
                  <option>Intelijen</option>
                  <option>Pidana Umum</option>
                  <option>Pidana Khusus</option>
                  <option>Perdata & Tata Usaha</option>
                  <option>Barang Bukti</option>
                  <option>Pemeriksa</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputDescription">Golongan Pangkat</label>
                <select class="form-control custom-select" name="gol">
                  <option selected disabled>Pilih Golongan</option>
                  <option>Eselon I</option>
                  <option>Eselon II</option>
                  <option>Eselon III</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputName">Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan Terakhir" required>
              </div>

              <div class="form-group">
                <label for="inputName">Tempat / Tanggal Lahir</label>
                <input type="text" name="ttl" class="form-control" placeholder="Tempat Tanggal Lahir" required>
              </div>

              <div class="form-group">
                <label for="inputName">No. Telepon</label>
                <input type="text" name="phone" class="form-control" placeholder="Nomor HP / Telepon" required>
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Tambahkan Data</button>
            </div>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- ============ MODAL DELETE =============== -->
      <div class="modal fade" id="modalHapusPegawai">
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
                <input type="text" id="inputName" class="form-control" value="nama_pegawai">
              </div>
              <div class="form-group">
                <label for="inputName">NIP / NIRP</label>
                <input type="text" id="inputName" class="form-control" value="nip">
              </div>
              <div class="form-group">
                <label for="inputName">Jabatan</label>
                <input type="text" id="inputName" class="form-control" value="jabatan">
              </div>
              <div class="form-group">
                <label for="inputDescription">Bidang</label>
                <select class="form-control custom-select">
                  <option selected disabled>Pilih Bidang</option>
                  <option>Pembinaan</option>
                  <option>Intelijen</option>
                  <option>Pidana Umum</option>
                  <option>Pidana Khusus</option>
                  <option>Perdata & Tata Usaha</option>
                  <option>Barang Bukti</option>
                  <option>Pemeriksa</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputDescription">Golongan Pangkat</label>
                <select class="form-control custom-select">
                  <option selected disabled>Pilih Golongan</option>
                  <option>Eselon I</option>
                  <option>Eselon II</option>
                  <option>Eselon III</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Pendidikan</label>
                <input type="text" id="inputName" class="form-control" value="pendidikan">
              </div>
              <div class="form-group">
                <label for="inputName">Tempat / Tanggal Lahir</label>
                <input type="text" id="inputName" class="form-control" value="ttl">
              </div>
              <div class="form-group">
                <label for="inputName">No. Telepon</label>
                <input type="text" id="inputName" class="form-control" value="phone">
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
