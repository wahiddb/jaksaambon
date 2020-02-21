    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kelola Kegiatan</h1>
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
        <a href="<?php echo site_url('admin/admin_post/add') ?>"><button type="button" class="btn btn-info" ><i class="far fa-plus-square"> Tambah Kegiatan Baru</i></button></a>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Data Perdata & Tata Usaha</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="myTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th><center>Judul</center></th>
                        <th>
                          <center>Subjudul</center>
                        </th>
                        <th>
                          <center>Foto Judul</center>
                        </th>
                        <th>
                          <center>Kategori</center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                    <!-- <?php
                        $no = 0;
                        foreach ($datun as $key => $datun) {?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no += 1; ?></td>
                                <td style="text-align:center;"><?php echo $datun->pemohon ?></td>
                                <td style="text-align:center;"><?php echo $datun->email ?></td>
                                <td style="text-align:center;"><?php echo $datun->perihal ?></td>
                                <td style="text-align:center;"><?php echo $datun->keterangan ?></td>
                                <td style="text-align:center;">
                                    <!-- <a class="btn  btn-warning" href="<?php echo site_url('admin/admin_datun/edit/' .$datun->id_datun) ?>"  title="Edit"><span class="far fa-edit"></span> Edit</a> -->
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin_datun/delete/'.$datun->id_datun) ?>')" href="#!" class="btn  btn-danger" title="Hapus"><span class="far fa-trash-alt"></span> Hapus</a>
                                </td>
                            </tr>
                        <?php  }?> -->
                
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

