    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data</h1>
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
                <a href="<?php echo site_url('admin/admin_datun') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $datun->id_datun?>" />

                    <div class="form-group">
                        <label for="pemohon">pemohon*</label>
                        <input class="form-control <?php echo form_error('pemohon') ? 'is-invalid':'' ?>"
                        type="text" name="pemohon" placeholder="Pemohon" value="<?php echo $datun->pemohon ?>" disable/>
                        <div class="invalid-feedback">
                            <?php echo form_error('pemohon') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                        type="text" name="email" placeholder="Email" value="<?php echo $datun->email ?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('email') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="perihal">Perihal*</label>
                        <input class="form-control <?php echo form_error('perihal') ? 'is-invalid':'' ?>"
                        type="text" name="perihal" placeholder="Perihal" value="<?php echo $datun->perihal ?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('perihal') ?>
                        </div>
                    </div>

                    <div class="form-group">
							<label for="keterangan">Keterangan*</label>
							<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								name="keterangan" placeholder="Keterangan" ><?php echo $datun->keterangan ?></textarea>
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
