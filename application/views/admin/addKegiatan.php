<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/summernote/summernote-bs4.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo site_url('post/save');?>" method="post">
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
						<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
						 type="file" name="image" />
						<div class="invalid-feedback">
						    <?php echo form_error('image') ?>
						</div>
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
                    <textarea id="summernote" name="konten"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 
    <script src="<?= base_url('assets'); ?>/dist/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets'); ?>/summernote/summernote-bs4.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });
 
            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php echo site_url('admin_post/upload_image')?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
 
            function deleteImage(src) {
                $.ajax({
                    data: {src : src},
                    type: "POST",
                    url: "<?php echo site_url('admin_post/delete_image')?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }
 
        });
         
    </script>
</body>
</html>