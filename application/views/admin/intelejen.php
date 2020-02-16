    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bidang Intelejen</h1>
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
            
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-9">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Data Laporan Masyarakat</h3>
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
                        <th>
                          <center>No</center>
                        </th>
                        <th>
                          <center>Nama Pelapor</center>
                        </th>
                        <th>
                          <center>Nama Terlapor</center>
                        </th>
                        <th>
                          <center>Jenis Identitas</center>
                        </th>
                        <th>
                          <center>No Identitas</center>
                        </th>
                        <th>
                          <center>Email / No. Telepon</center>
                        </th>
                        <th>
                          <center>Terlapor</center>
                        </th>
                        <th>
                          <center>Dugaan Tindak Pidana</center>
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
                    <?php
                        $no = 0;
                        foreach ($intel as $key => $intel) {?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no += 1; ?></td>
                                <td style="text-align:center;"><?php echo $intel->pelapor ?></td>
                                <td style="text-align:center;"><?php echo $intel->terlapor ?></td>
                                <td style="text-align:center;"><?php echo $intel->identitas ?></td>
                                <td style="text-align:center;"><?php echo $intel->no_identitas ?></td>
                                <td style="text-align:center;"><?php echo $intel->email ?></td>
                                <td style="text-align:center;"><?php echo $intel->terlapor ?></td>
                                <td style="text-align:center;"><?php echo $intel->tindak_pidana ?></td>
                                <td style="text-align:center;"><?php echo $intel->keterangan ?></td>
                                <td style="text-align:center;"><?php echo $intel->status ?></td>
                                <td style="text-align:center;">
                                    <a class="btn  btn-warning" href="<?php echo site_url('admin/admin_intel/edit/' .$intel->id_intel) ?>"  title="Edit"><span class="far fa-edit"></span> Edit</a>
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin_intel/delete/'.$intel->id_intel) ?>')" href="#!" class="btn  btn-danger" title="Hapus"><span class="far fa-trash-alt"></span> Hapus</a>
                                    
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
