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
                  <h3 class="card-title">Data Barang Bukti</h3>
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
                          <th><center>Nama Tersangka</center></th>
                          <th>
                            <center>No. Perkara</center>
                          </th>
                          <th>
                            <center>Jenis Barang Bukti</center>
                          </th>
                          <th>
                            <center>Banyaknya Satuan</center>
                          </th>
                          <th>
                            <center>Status</center>
                          </th>
                          <th>
                            <center>Keterangan</center>
                          </th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                        $no = 0;
                        foreach ($barbuk as $key => $barbuk) {?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no += 1; ?></td>
                                <td style="text-align:center;"><?php echo $barbuk->tersangka ?></td>
                                <td style="text-align:center;"><?php echo $barbuk->no_perkara ?></td>
                                <td style="text-align:center;"><?php echo $barbuk->jenis ?></td>
                                <td style="text-align:center;"><?php echo $barbuk->jumlah ?></td>
                                <td style="text-align:center;"><?php echo $barbuk->status ?></td>
                                <td style="text-align:center;"><?php echo $barbuk->keterangan ?></td>
                                <td style="text-align:center;">
                                    <a class="btn  btn-warning" href="<?php echo site_url('admin/admin_barbuk/edit/' .$barbuk->id_barbuk) ?>"  title="Edit"><span class="far fa-edit"></span> Edit</a>
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin_barbuk/delete/'.$barbuk->id_barbuk) ?>')" href="#!" class="btn  btn-danger" title="Hapus"><span class="far fa-trash-alt"></span> Hapus</a>
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
                  <h3 class="card-title">Rekapitulasi Barang Bukti</h3>
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
                          Status Barang Bukti
                        </th>
                        <th>
                          <center>Jumlah</center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dimusnahkan</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <td>Dirampas Negara</td>
                        <td><center> 5 </center></td>
                      </tr>
                      <tr>
                        <td>Dikembalikan</td>
                        <td><center> 2 </center></td>
                      </tr>
                      <tr>
                        <td>Dilelang</td>
                        <td><center> 1 </center></td>
                      </tr>
                      <tr>
                        <th>Jumlah</th>
                        <th><center> 5 </center></th>
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
