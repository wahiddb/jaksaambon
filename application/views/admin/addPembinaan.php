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
                <a href="<?php echo site_url('admin/admin_pembinaan') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">

                <form action="<?php echo site_url('admin/admin_pembinaan/add') ?>" method="post" enctype="multipart/form-data" >

                    <div class="form-group">
                        <label for="nama">Nama Pegawai*</label>
                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                        type="text" name="nama" placeholder="Nama Pegawai" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nama') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nip">NIP*</label>
                        <input class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
                        type="text" name="nip" placeholder="NIP / NIRP" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nip') ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="jabatan">Jabatan*</label>
                        <input class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>"
                        type="text" name="jabatan" placeholder="Jabatan" />
                        <div class="invalid-feedback">
                            <?php echo form_error('jabatan') ?>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="inputDescription">Bidang</label>
                    <select class="form-control custom-select <?php echo form_error('bidang') ? 'is-invalid':'' ?>"
                            name="bidang" required>
                    <option selected disabled>Pilih Bidang</option>
                    <option>Pembinaan</option>
                    <option>Intelijen</option>
                    <option>Pidana Umum</option>
                    <option>Pidana Khusus</option>
                    <option>Perdata & Tata Usaha</option>
                    <option>Barang Bukti</option>
                    <option>Pemeriksa</option>
                    <option>Pimpinan</option>
                    </select>
                </div>

                    <div class="form-group">
                        <label for="name">Golongan*</label>
                        <input class="form-control <?php echo form_error('gol') ? 'is-invalid':'' ?>"
                        type="text" name="gol" placeholder="Golongan" />
                        <div class="invalid-feedback">
                            <?php echo form_error('gol') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Pendidikan*</label>
                        <input class="form-control <?php echo form_error('pendidikan') ? 'is-invalid':'' ?>"
                        type="text" name="pendidikan" placeholder="Pendidikan" />
                        <div class="invalid-feedback">
                            <?php echo form_error('pendidikan') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Tempat / Tanggal Lahir*</label>
                        <input class="form-control <?php echo form_error('ttl') ? 'is-invalid':'' ?>"
                        type="text" name="ttl" placeholder="Tempat Tanggal Lahir" />
                        <div class="invalid-feedback">
                            <?php echo form_error('ttl') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Nomor Telepon*</label>
                        <input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
                        type="text" name="phone" placeholder="Nomor Telepon" />
                        <div class="invalid-feedback">
                            <?php echo form_error('phone') ?>
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
