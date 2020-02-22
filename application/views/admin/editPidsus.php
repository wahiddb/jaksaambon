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
                <a href="<?php echo site_url('admin/admin_pidsus') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $pidsus->id_pidsus?>" />

                    <div class="form-group">
                        <label for="no_perkara">Nomor Perkara*</label>
                        <input class="form-control <?php echo form_error('no_perkara') ? 'is-invalid':'' ?>"
                        type="text" name="no_perkara" placeholder="Nomor Perkara" value="<?php echo $pidsus->nomor_perkara ?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('no_perkara') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pasal">Pasal*</label>
                        <input class="form-control <?php echo form_error('pasal') ? 'is-invalid':'' ?>"
                        type="text" name="pasal" placeholder="Pasal yang Dilanggar" value="<?php echo $pidsus->pasal ?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('pasal') ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="tersangka">Tersangka*</label>
                        <input class="form-control <?php echo form_error('tersangka') ? 'is-invalid':'' ?>"
                        type="text" name="tersangka" placeholder="Tersangka" value="<?php echo $pidsus->tersangka ?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('tersangka') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jadwal">Jadwal Sidang*</label>
                        <input class="form-control <?php echo form_error('jadwal') ? 'is-invalid':'' ?>"
                        type="text" name="jadwal" placeholder="Jadwal Sidang" value="<?php echo $pidsus->jadwal ?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('jadwal') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="agenda">Agenda*</label>
                        <input class="form-control <?php echo form_error('agenda') ? 'is-invalid':'' ?>"
                        type="text" name="agenda" placeholder="Agenda" value="<?php echo $pidsus->agenda ?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('agenda') ?>
                        </div>
                    </div>

                    <div class="form-group">
							<label for="keterangan">Keterangan*</label>
							<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								name="keterangan" placeholder="Keterangan" ><?php echo $pidsus->keterangan ?></textarea>
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
