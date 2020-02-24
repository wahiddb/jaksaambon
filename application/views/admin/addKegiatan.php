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
                <a href="<?php echo site_url('admin/admin_post') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" />

                <div class="form-group">
                        <label for="judul">Judul Kegiatan</label>
                        <input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
                        type="text" name="judul" placeholder="Judul" />
                        <div class="invalid-feedback">
                            <?php echo form_error('judul') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subjudul">Sub Judul</label>
                        <input class="form-control <?php echo form_error('subjudul') ? 'is-invalid':'' ?>"
                        type="text" name="subjudul" placeholder="Sub Judul" />
                        <div class="invalid-feedback">
                            <?php echo form_error('subjudul') ?>
                        </div>
                    </div>

                    <div class="form-group">
						<label for="image">Foto Judul</label>
						<input class="form-control-file "
						 type="file" name="image" />
					</div>

                    <div class="form-group">
                    <label for="inputDescription">Kategori</label>
                    <select class="form-control custom-select <?php echo form_error('kategori') ? 'is-invalid':'' ?>"
                            name="kategori" required>
                    <option selected disabled>Pilih Bidang</option>
                    <option>Pembinaan</option>
                    <option>Intelijen</option>
                    <option>Penyuluhan</option>
                    <option>Pidana Umum</option>
                    <option>Pidana Khusus</option>
                    <option>Perdata & Tata Usaha</option>
                    <option>Barang Bukti</option>
                    <option>Pemeriksa</option>
                    <option>Adyaksa Dharmakarin</option>
                    <option>WBK / WBMM</option>
                    </select>
                </div>

                  <div class="form-group">
                    <label>Konten</label>
                    <textarea id="ckeditor" name="konten"></textarea>
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

    <script src="<?= base_url('assets'); ?>/dist/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    