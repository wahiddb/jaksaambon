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
                <a href="<?php echo site_url('admin/admin_pemeriksa') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $pemeriksa->id_pemeriksa?>" />

                    <div class="form-group">
                        <label for="pelapor">Pelapor*</label>
                        <input class="form-control <?php echo form_error('pelapor') ? 'is-invalid':'' ?>"
                        type="text" name="pelapor" placeholder="pelapor" value="<?php echo $pemeriksa->pelapor ?>" readonly/>
                        <div class="invalid-feedback">
                            <?php echo form_error('pelapor') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="identitas">Identitas*</label>
                        <input class="form-control <?php echo form_error('identitas') ? 'is-invalid':'' ?>"
                        type="text" name="identitas" placeholder="identitas" value="<?php echo $pemeriksa->identitas ?>"readonly/>
                        <div class="invalid-feedback">
                            <?php echo form_error('identitas') ?>
                        </div>
                    </div>

                    <div class="form-group">
							<label for="no_identitas">No Identitas*</label>
							<input class="form-control <?php echo form_error('no_identitas') ? 'is-invalid':'' ?>"
								name="no_identitas" placeholder="No_Identitas" value="<?php echo $pemeriksa->no_identitas ?>"readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('no_identitas') ?>
							</div>
					</div>

                    <div class="form-group">
							<label for="email">Email*</label>
							<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								name="email" placeholder="No_Identitas" value="<?php echo $pemeriksa->email ?>"readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('email') ?>
							</div>
					</div>

                    <div class="form-group">
                        <label for="terlapor">Terlapor*</label>
                        <input class="form-control <?php echo form_error('terlapor') ? 'is-invalid':'' ?>"
                        type="text" name="terlapor" placeholder="Email" value="<?php echo $pemeriksa->terlapor ?>"readonly/>
                        <div class="invalid-feedback">
                            <?php echo form_error('terlapor') ?>
                        </div>
                    </div>

                    <div class="form-group">
							<label for="pelanggaran">Dugaan Pelanggaran*</label>
							<input class="form-control <?php echo form_error('pelanggaran') ? 'is-invalid':'' ?>"
								name="pelanggaran" placeholder="No_Identitas" value="<?php echo $pemeriksa->pelanggaran ?>"readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('pelanggaran') ?>
							</div>
					</div>

                    <div class="form-group">
							<label for="keterangan">Keterangan*</label>
							<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								name="keterangan" placeholder="No_Identitas" readonly><?php echo $pemeriksa->keterangan ?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('keterangan') ?>
							</div>
					</div>

                    <div class="form-group">
                    <label for="inputDescription">Status</label>
                    <select class="form-control custom-select <?php echo form_error('status') ? 'is-invalid':'' ?>"
                            name="status" required>
                    <option selected disabled>Pilih Status</option>
                    <option>Belum Diproses</option>
                    <option>Sudah Diproses</option>
                    <option>Sudah Selesai</option>
                    </select>
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
