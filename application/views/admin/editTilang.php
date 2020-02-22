    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data</h1>
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
                <input type="hidden" name="id" value="<?php echo $tilang->id_tilang?>" />

                    <div class="form-group">
                        <label for="tersangka">Nama Pelanggar*</label>
                        <input class="form-control <?php echo form_error('tersangka') ? 'is-invalid':'' ?>"
                        type="text" name="tersangka" placeholder="Nama Pelanggar" value="<?php echo $tilang->tersangka?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('tersangka') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pasal">Pasal yang Dilanggar*</label>
                        <input class="form-control <?php echo form_error('pasal') ? 'is-invalid':'' ?>"
                        type="text" name="pasal" placeholder="Pasal yang Dilanggar"  value="<?php echo $tilang->pasal?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('pasal') ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="nomor_perkara">Nomor Seri Tilang*</label>
                        <input class="form-control <?php echo form_error('nomor_perkara') ? 'is-invalid':'' ?>"
                        type="text" name="nomor_perkara" placeholder="Tersangka" value="<?php echo $tilang->nomor_perkara?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nomor_perkara') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="plat">Plat Nomor*</label>
                        <input class="form-control <?php echo form_error('plat') ? 'is-invalid':'' ?>"
                        type="text" name="plat" placeholder="Plat Nomor" value="<?php echo $tilang->plat?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('plat') ?>
                        </div>
                    </div>

                    <div class="form-group">
							<label for="tgl_sidang">Tanggal Sidang*</label>
							<input class="form-control <?php echo form_error('tgl_sidang') ? 'is-invalid':'' ?>"
								name="tgl_sidang" placeholder="Tanggal Sidang" value="<?php echo $tilang->tgl_sidang?>" />
							<div class="invalid-feedback">
								<?php echo form_error('tgl_sidang') ?>
							</div>
					</div>

                    <div class="form-group">
							<label for="status">Status*</label>
							<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								name="status" placeholder="Status" value="<?php echo $tilang->status?>" />
							<div class="invalid-feedback">
								<?php echo form_error('status') ?>
							</div>
					</div>

                    <div class="form-group">
							<label for="keterangan">Keterangan*</label>
							<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								name="keterangan" placeholder="Keterangan" ><?php echo $tilang->keterangan?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('keterangan') ?>
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
