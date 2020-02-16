    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Tilang</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
     <div class="content">
     <div class="container-fluid">
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <div class="card mb-3">
            <div class="card-header">
                <a href="<?php echo site_url('admin/admin_pidum') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id"  />

                    <div class="form-group">
                        <label for="tersangka">Nama Pelanggar*</label>
                        <input class="form-control <?php echo form_error('tersangka') ? 'is-invalid':'' ?>"
                        type="text" name="tersangka" placeholder="Nama Pelanggar" />
                        <div class="invalid-feedback">
                            <?php echo form_error('tersangka') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pasal">Pasal Yang Dilanggar*</label>
                        <input class="form-control <?php echo form_error('pasal') ? 'is-invalid':'' ?>"
                        type="text" name="pasal" placeholder="Pasal yang Dilanggar"  />
                        <div class="invalid-feedback">
                            <?php echo form_error('pasal') ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="nomor_perkara">Nomor Seri Tilang*</label>
                        <input class="form-control <?php echo form_error('nomor_perkara') ? 'is-invalid':'' ?>"
                        type="text" name="nomor_perkara" placeholder="Nomor Seri Tilang" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nomor_perkara') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="plat">Plat Nomor*</label>
                        <input class="form-control <?php echo form_error('plat') ? 'is-invalid':'' ?>"
                        type="text" name="plat" placeholder="Plat Nomor" />
                        <div class="invalid-feedback">
                            <?php echo form_error('plat') ?>
                        </div>
                    </div>

                    <div class="form-group">
							<label for="tgl_sidang">Tanggal Sidang*</label>
							<input class="form-control <?php echo form_error('tgl_sidang') ? 'is-invalid':'' ?>"
								name="tgl_sidang" placeholder="Tanggal Sidang" />
							<div class="invalid-feedback">
								<?php echo form_error('tgl_sidang') ?>
							</div>
					</div>

                    <div class="form-group">
							<label for="status">Status*</label>
							<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								name="status" placeholder="Tanggal Sidang" />
							<div class="invalid-feedback">
								<?php echo form_error('status') ?>
							</div>
					</div>

                    <input class="btn btn-success" type="submit" name="btn" value="Save" />
                </form>
            </div>

            <div class="card-footer small text-muted">
                * required fields
            </div>
            </div>
        </div>
<!-- /.container-fluid -->
    </div>
    <!-- /.content -->
