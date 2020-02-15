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
          <a href="<?php echo site_url('admin/admin_pembinaan/add') ?>"><button type="button" class="btn btn-info" ><i class="far fa-plus-square"> Tambah Pegawai Baru</i></button></a>
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
                        foreach ($pegawai as $key => $pegawai) {?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no += 1; ?></td>
                                <td style="text-align:center;"><?php echo $pegawai->nama ?></td>
                                <td style="text-align:center;"><?php echo $pegawai->nip ?></td>
                                <td style="text-align:center;"><?php echo $pegawai->jabatan ?></td>
                                <td style="text-align:center;"><?php echo $pegawai->bidang ?></td>
                                <td style="text-align:center;"><?php echo $pegawai->gol ?></td>
                                <td style="text-align:center;"><?php echo $pegawai->pendidikan ?></td>
                                <td style="text-align:center;"><?php echo $pegawai->ttl ?></td>
                                <td style="text-align:center;"><?php echo $pegawai->phone ?></td>
                                <td style="text-align:center;">
                                    <a class="btn  btn-warning" href="<?php echo site_url('admin/admin_pembinaan/edit/' .$pegawai->id_pegawai) ?>"  title="Edit"><span class="far fa-edit"></span> Edit</a>
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin_pembinaan/delete/'.$pegawai->id_pegawai) ?>')" href="#!" class="btn  btn-danger" title="Hapus"><span class="far fa-trash-alt"></span> Hapus</a>
                                    
                                </td>
                            </tr>
                        <?php  }?>
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
    </div>
    <!-- /.content -->
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>
