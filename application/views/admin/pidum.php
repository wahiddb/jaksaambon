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
          <a href="<?php echo site_url('admin/admin_pidum/add') ?>"><button type="button" class="btn btn-info" ><i class="far fa-plus-square"> Tambah Data Pidum</i></button></a>
          <a href="<?php echo site_url('admin/admin_pidum/add') ?>"><button type="button" class="btn btn-info" ><i class="far fa-plus-square"> Tambah Data Tilang</i></button></a>
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
                        foreach ($pidum as $key => $pidum) {?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no += 1; ?></td>
                                <td style="text-align:center;"><?php echo $pidum->nomor_perkara ?></td>
                                <td style="text-align:center;"><?php echo $pidum->pasal ?></td>
                                <td style="text-align:center;"><?php echo $pidum->tersangka ?></td>
                                <td style="text-align:center;"><?php echo $pidum->status ?></td>
                                <td style="text-align:center;"><?php echo $pidum->keterangan ?></td>
                                <td style="text-align:center;">
                                    <a class="btn  btn-warning" href="<?php echo site_url('admin/admin_pidum/edit/' .$pidum->id_pidum) ?>"  title="Edit"><span class="far fa-edit"></span> Edit</a>
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin_pidum/delete/'.$pidum->id_pidum) ?>')" href="#!" class="btn  btn-danger" title="Hapus"><span class="far fa-trash-alt"></span> Hapus</a>
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
