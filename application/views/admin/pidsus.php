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
          <a href="<?php echo site_url('admin/admin_pidsus/add') ?>"><button type="button" class="btn btn-info" ><i class="far fa-plus-square"> Tambah Data</i></button></a>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Data Pidana Khusus</h3>
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
                        <th><center>No</center></th>
                        <th><center>Nomor Perkara</center></th>
                        <th>
                          <center>Pasal Yang Dilanggar</center>
                        </th>
                        <th>
                          <center>Tersangka</center>
                        </th>
                        <th>
                          <center>Jadwal Sidang</center>
                        </th>
                        <th>
                          <center>Agenda</center>
                        </th>
                        <th>
                          <center>Keterangan</center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                        $no = 0;
                        foreach ($pidsus as $key => $pidsus) {?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no += 1; ?></td>
                                <td style="text-align:center;"><?php echo $pidsus->nomor_perkara ?></td>
                                <td style="text-align:center;"><?php echo $pidsus->pasal ?></td>
                                <td style="text-align:center;"><?php echo $pidsus->tersangka ?></td>
                                <td style="text-align:center;"><?php echo $pidsus->jadwal ?></td>
                                <td style="text-align:center;"><?php echo $pidsus->agenda ?></td>
                                <td style="text-align:center;"><?php echo $pidsus->keterangan ?></td>
                                <td style="text-align:center;">
                                    <a class="btn  btn-warning" href="<?php echo site_url('admin/admin_pidsus/edit/' .$pidsus->id_pidsus) ?>"  title="Edit"><span class="far fa-edit"></span> Edit</a>
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin_pidsus/delete/'.$pidsus->id_pidsus) ?>')" href="#!" class="btn  btn-danger" title="Hapus"><span class="far fa-trash-alt"></span> Hapus</a>
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
