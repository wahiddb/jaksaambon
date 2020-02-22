
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 
    <script src="<?= base_url('assets'); ?>/dist/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
    
